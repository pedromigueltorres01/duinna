/ **
 * @name jQuery Form
 * @description Un complemento de manejo y validación de formularios jQuery
 * 
 * @pag
 * jQuery Form está diseñado con flexibilidad en mente, sin embargo, todavía
 * abastece a aquellos que necesitan un complemento para trabajar de la caja.
 * @pag
 * Por defecto, adjuntará mensajes de error envueltos en etiquetas de etiqueta x / html
 * después del elemento de formulario con una clase de error cuando se envía el formulario.
 * Sin embargo, se puede personalizar a través de opciones para que se ajuste 
 * mensajes en un elemento diferente, le da un className diferente y
 * validar en desenfoque.
 * @pag
 * Permite aún más cusomización de comportamiento a través de manejadores de errores y
 * enviar manejadores. Otras opciones de personalización incluyen poder establecer
 * depende de ciertos elementos. Es decir, hacer que un elemento dependa
 * sobre la validez de ciertas reglas personalizadas que no están establecidas como validadores.
 * 
 * @version 1.0b
 * @ fecha 2008-12-07
 * 
 * @copyright
 * Copyright (c) 2008 Trey Shugart (shugartweb.com/jquery/)
 * 
 * @license
 * Doble licencia bajo: 
 * MIT - (http://www.opensource.org/licenses/mit-license.php) 
 * GPL - (http://www.gnu.org/licenses/gpl.txt)
 * /
; (función ($) {
	
	$ .form = {};
	$ .form.handlers = {};
	$ .form.handlers.errors = {};
	$ .form.handlers.submit = {};
	$ .form.validators = {};
	
	/ **
	 * @ nombre jQuery.form.addErrorHandler
	 * @description
	 * Establece un controlador de errores y le da un nombre para que pueda ser referenciado. Los controladores de devolución de llamada
	 * el anexar y mostrar los errores. Se pasan dos parámetros a la devolución de llamada. El primero
	 * es el objeto de formulario y el segundo es una matriz de objetos que contiene object.field y 
	 * object.message. El primero es el campo en el que se produjo el error, y el segundo
	 * es el mensaje de error.
	 * @ param {String} name El nombre del controlador de errores
	 * @param {Function} callback La devolución de llamada para manejar los errores
	 * @return El controlador de errores que se acaba de establecer
	 * 
	 * @ejemplo
	 * $ .form.addErrorHandler ('myCustomHandler', función (formulario, errores) {
	 * $ (formulario) .find ('label.error'). remove ();
	 * $ .each (errores, función (i, el) {
	 * $ campo = $ (el.campo);
	 * $ field.after ('<label for = "' + $ field.attr ('id') + '" class = "error">' + el.error + '</ label>');
	 *});
	 *});
	 * /
	$ .form.addErrorHandler = function (name, callback) {
		return _addHandler ('errores', nombre, devolución de llamada);
	};
	
	/ **
	 * @name jQuery.form.addSubmitHandler
	 * @description
	 * Establece un controlador de envío y le da un nombre para que pueda ser referenciado. Los controladores de devolución de llamada
	 * cómo se envía el formulario y si se envía (devolviendo verdadero o falso). los
	 * solo el parámetro pasado a la devolución de llamada es el objeto de formulario.
	 * @ param {String} nombre El nombre del controlador de envío
	 * @param {Function} callback La devolución de llamada para manejar el envío
	 * @return El controlador de envío que se acaba de establecer
	 * 
	 * @ejemplo
	 * $ .form.addSubmitHandler ('myCustomHandler', función (formulario) {
	 * devuelve verdadero;
	 *});
	 * /
	$ .form.addSubmitHandler = function (name, callback) {
		return _addHandler ('submit', name, callback);
	};
	
	/ **
	 * @name jQuery.form.addValidator
	 * @description 
	 * Agrega una devolución de llamada de validación para un cierto tipo de campo y da
	 * es un mensaje predeterminado opcional. Se pasan dos parámetros al
	 * llamar de vuelta. El primero es el objeto de formulario y el segundo es el
	 * campo validado
	 * @param {String} tipo El tipo / nombre del validador que se agrega
	 * @param {Función} devolución de llamada La devolución de llamada realizada para realizar la validación. Devuelve verdadero o falso, indicando pase o falla, respectivamente.
	 * @ param {String} defaultMessage El mensaje predeterminado que se mostrará al error si no se establecen otros mensajes de error.
	 * @return El validador que se acaba de configurar
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ .form.addValidator ('required', function (form, field) {
	 * $ campo = $ (campo);
	 * return $ field.val ()! == ''; // verdadero o falso
	 *});
	 * /
	$ .form.addValidator = function (type, callback, defaultMessage) {
		$ .form.validators [type] = {};
		$ .form.validators [type] ['validator'] = callback;
		$ .form.validators [type] ['message'] = defaultMessage;
		return $ .form.validators [tipo];
	};
	
	/ **
	 * @name jQuery.form.removeValidator
	 * @description 
	 * Globlly elimina un validatior del tipo especificado y devuelve el resultado
	 * conjunto de objetos de validadores.
	 * @param {String} tipo El tipo de validador para eliminar
	 * @return Una colección de todos los validadores después de la eliminación
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ .form.removeValidator ('required');
	 * /
	$ .form.removeValidator = function (type) {
		$ .form.validators = $ ($. form.validators) .filter (function () {
			$ (this) .get (0) .type! == 'tipo';
		});
		devuelve $ .form.validators;
	};
	
	/ **
	 * @name jQuery.fn.form
	 * @description 
	 * Acceso directo para inicializar y validar todo en una llamada. Esto es
	 * en general, cómo se usará jQuery.form. Esto utiliza envío personalizado
	 * controladores, manejadores de errores, dependencias y configuraciones, mientras que también 
	 * proporcionando un comportamiento predeterminado si no se establece nada.
	 *     
	 * De manera predeterminada, los errores se anexarán después del elemento de formulario y se envolverán
	 * en una & lt; etiqueta & gt; elemento con el atributo for el mismo que el
	 * atributo de identificación del campo.
	 * @param {Object} opciones Las opciones para ser usadas con este formulario
	 * @return {Object}
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('formulario'). formulario ();
	 * 
	 * @ejemplo
	 * $ ('formulario'). formulario ({
	 * useClassAsType: verdadero,
	 * useTitleAsError: verdadero,
	 * filtro: ': habilitado',
	 * ignorar : '',
	 * errorHandler: 'predeterminado',
	 * submitHandler: 'predeterminado'
	 *});
	 * /
	$ .fn.form = function (opciones) {
		return $ (this) .each (function () {
			var $ form = _getForm.apply (this) .formSetOptions (opciones);
			var options = $ form.formGetOptions ();
			
			if (! options.validateOnBlurAfterSubmit)
				_setBlurHandler.apply (esto);
			
			$ form.submit (function () {
				if (options.validateOnBlurAfterSubmit)
					_setBlurHandler.apply (esto);
				
				if ($ form.formValidate (). formHasErrors ()) {
					$ form.formHandleErrors ();
					falso retorno;
				}
				return $ form.formHandleSubmit ();
			});
			
			function _setBlurHandler () {
				if (options.blurHandler) {
					_getFields.apply (this) .each (function () {
						var $ field = $ (this);
						
						if (! $ field.data ('form.hasBlurHandler'))
							$ field.data ('form.hasBlurHandler', true) .blur (function () {
								$ (this) .formValidate (). formHandleErrors (options.blurHandler);
							});
					});
				}
			}
		});
	};
	
	/ **
	 * @name jQuery.fn.formHandleErrors
	 * @description
	 * Este método, además de ser utilizado internamente, también se puede usar para más
	 * formas de personalizar el manejo de errores de formulario. Esto invoca el error apropiado
	 * controlador para el formulario seleccionado. Por lo general, en situaciones como esta,
	 * se llamará a formValidate () antes de llamar a formHandleErrors ya que 
	 * valida el formulario y adjunta los errores a sus respectivos campos.
	 * @param {String | Function} nombre El nombre del controlador que se va a invocar. Si no se especifica, el controlador se toma de las opciones adjuntas al formulario seleccionado.
	 * 
	 * @ejemplo
	 * $ ('button # check-form'), haga clic en (function () {
	 * $ ('forma')
	 * .formValidate ()
	 * .formHandleErrors ('predeterminado');
	 *});
	 * /
	$ .fn.formHandleErrors = function (name) {
		var $ form = _getForm.apply (esto);
		var $ fields = _getFields.apply (esto);
		var func = typeof name! == 'undefined'? nombre: $ form.formGetOptions (). errorHandler;
		var errors = $ fields.formGetErrors ();
		devuelve $ .isFunction (func)? func ($ form, $ fields): $ .form.handlers ['errors'] [func] ($ form, $ fields);
	};
	
	/ **
	 * @name jQuery.fn.formHandleSubmit
	 * @description
	 * Lo mismo que formHandleErrors, pero invoca el envío de formularios.
	 * @param {String | Function} name Se comporta de la misma manera que formHandleErrors
	 * 
	 * @ejemplo
	 * $ ('formulario'). formHandleSubmit ('predeterminado');
	 * /
	$ .fn.formHandleSubmit = function (name) {
		var $ form = _getForm.apply (esto);
		var $ fields = _getFields.apply (esto);
		var func = typeof name! == 'undefined'? nombre: $ form.formGetOptions (). submitHandler;
		devuelve $ .isFunction (func)? func ($ form, $ fields): $ .form.handlers ['submit'] [func] ($ form, $ fields);
	};
	
	/ **
	 * @name jQuery.fn.formFields
	 * @description 
	 * Crea un objeto de formulario a partir de los campos del formulario especificado. Si los argumentos son
	 * pasado, se espera que sean cadenas de cada nombre de elementos de formulario que
	 * quieres regresar Si el primer argumento es una matriz, entonces eso es
	 * se espera que contenga todos los nombres de los campos que desea devolver.
	 * @param {String | Array} Cadena o matriz de nombres de campo para devolver
	 * @return Collection of jQuery form field objects
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('forma'). formFields ('inputName');
	 * 
	 * @ejemplo
	 * $ ('form'). formFields (['inputName1', 'inputName2', 'inputName3']);
	 * /
	$ .fn.formFields = function (filterBy) {
		var $ form = _getForm.apply (esto);
		var filterBy = typeof filterBy === 'string'? [filterBy]: filterBy;
		var selectores = [];
		$ .each (filterBy, function (i, el) {
			selectores [selectors.length] = ': entrada [@ name = "' + el + '"]';
		});
		return $ form.find (selectors.join (','));
	};
	
	/ **
	 * @name jQuery.fn.formSetTypes
	 * @description
	 * Establece el tipo o tipos (dependiendo de si se pasa una cadena o matriz)
	 * de los campos en la colección. Si ya existe un tipo, esto
	 * luego sea un tipo adicional. Si este tipo existe, entonces será
	 * sobrescrito.
	 * @param {String|Array} types A string or array of types to set the field to
	 * @return {Object}
	 * @chainable true
	 * 
	 * @example
	 *  $('form').formFields(['input1', 'input2']).formSetTypes('required');
	 */
	$.fn.formAddTypes = function(types) {
		return $(this).each(function(i, field) {
			var types = typeof types === 'string' ? [types] : types;
			$ .each (tipos, función (ii, tipo) {
				_add (campo, 'tipo', tipo);
			});
		});
	};
	
	/ **
	 * @name jQuery.fn.formRemoveType
	 * @description
	 * Elimina el (los) tipo (s) pasado (s) de los campos seleccionados
	 * @param {String | Array} types Una cadena o matriz de tipos para eliminar del campo
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('# input1'). formRemoveType ('required');
	 * /
	$ .fn.formRemoveTypes = function (str) {
		return $ (this) .each (function (i, field) {
			tipos var = tipo de tipos === 'cadena'? [tipos]: tipos;
			$ .each (tipos, función (ii, tipo) {
				_remove (campo, 'tipo', tipo);
			});
		});
	};
	
	/ **
	 * @name jQuery.fn.formGetTypes
	 * @description
	 * Devuelve el tipo de un solo campo
	 * @return Array de tipos
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('# input1'). formGetTypes ();
	 * /
	$ .fn.formGetTypes = function () {
		return _get (this, 'type');
	};
	
	/ **
	 * @name jQuery.fn.formIsType
	 * @description
	 * Verifica si el campo pasado es un tipo determinado
	 * @param {String} tipo El tipo para verificar el campo contra
	 * @return {Boolean}
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('# input1'). formIsType ('required');
	 * /
	$ .fn.formIsType = function (type) {
		var arr = $ (this) .eq (0) .data ('form.type');
		return typeof arr! == 'undefined' && $ .inArray (type, arr)! == -1;
	};
	
	/ **
	 * @name jQuery.fn.formFilterByType
	 * @description
	 * Filtra cualquier campo que no coincida con el tipo dado
	 * @param {String} tipo El tipo para filtrar por
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('form: input'). formFilterByType ('required');
	 * /
	$ .fn.formFilterByType = function (type) {
		return $ (this) .filter (function () {
			return $ (this) .formIsType (tipo);
		});
	};
	
	/ **
	 * @name jQuery.fn.formGetErrors
	 * @description
	 * Recupera todos los mensajes de error asociados con el formulario especificado y devuelve
	 * una matriz.
	 * @return Array of Objects que contiene el objeto de campo y la matriz de mensajes de error
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('formulario'). formGetErrors ();
	 * /
	$ .fn.formGetErrors = function () {
		var errors = [];
		_getFields.apply (this) .each (función (i, campo) {
			var fieldErrors = _get (campo, 'errores') || [];
			if (typeof fieldErrors! == 'undefined') {
				$ .each (fieldErrors, function (ii, error) {
					errors [errors.length] = {
						campo: $ (campo),
						mensaje: error
					};
				});
			}
		});
		errores de devolución;
	};
	
	/ **
	 * @name jQuery.fn.formHasErrors
	 * @description
	 * Verifica si el formulario actual tiene algún error
	 * @return {Boolean}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('formulario'). formHasErrors ();
	 * /
	$ .fn.formHasErrors = function () {
		devuelve $ (this) .formGetErrors (). length> 0? verdadero Falso;
	};
	
	/ **
	 * @ nombre jQuery.fn.formSetErrorMessage
	 * @description
	 * Establece un mensaje de error para un campo con un tipo específico
	 * @param {String} tipo El tipo de error para adjuntar el mensaje a
	 * @param {String} mensaje El mensaje para establecer
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('# input1'). formSetErrorMessage ('required', 'Por favor, introduzca un valor para este campo');
	 * /
	$ .fn.formSetErrorMessage = function (tipo, mensaje) {
		return _getFields.apply (this) .each (función (índice, campo) {
			var $ field = $ (campo);
			if ($ field.formIsType (type))
				_add ($ (campo), 'errorMessages.' + tipo, mensaje);
		});
	};
	
	/ **
	 * @name jQuery.fn.formGetErrorMessage
	 * @description
	 * Recupera mensajes de error para un tipo dado en el campo dado. Error
	 * los mensajes se definen manualmente usando formSetErrorMessage, en
	 * atributo de título de los elementos (o atributo especificado), o utilizando el
	 * mensaje predeterminado proporcionado por el validador.
	 * @param {String} tipo
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('# input1'). formGetErrorMessage ('required');
	 * /
	$ .fn.formGetErrorMessage = function (type) {
		var $ field = _getFields.apply (this) .eq (0);
		var msg = _get ($ campo, 'errorMessages.' + tipo),
		    msg    = typeof msg !== 'undefined' && msg !== '' ? msg : $field.formGetOptions().useTitleAsError ? $field.attr('title') : undefined,
		    msg    = typeof msg !== 'undefined' && msg !== '' ? msg : $.form.validators[type].message;
		return msg;
	};
	
	/**
	 * @name jQuery.fn.formIs
	 * @description
	 *     Checks to see if a form element is valid but only of the specified type
	 * @param {Object} type The name of the validator to use to check the passed field
	 * @return {Boolean}
	 * @chainable false
	 * 
	 * @example
	 *  $('#input1').formIs('required');
	 */
	$.fn.formIs = function(type) {
		if (typeof $.form.validators[type] !== 'undefined') {
			var $form = _getForm.apply(this);
			var o     = $form.formGetOptions();
			return $.form.validators[type].validator($form.get(0), this);
		}
		return true;
	};
	
	/**
	 * @name jQuery.fn.formValidate
	 * @description
	 *     Checks the validity of a form, sets error messages, checks dependencies
	 *     and returns whether the form contains any errors.
	 * @return {Boolean}
	 * @chainable false
	 * 
	 * @example
	 *  $('form').formIsValid();
	 * 
	 * @example
	 *  $(':input[name="field1"], :input[name="field2"]').formValidate();
	 */
	$.fn.formValidate = function() {
		var errors  = 0;
		var $this   = $(this);
		var form    = _getForm.apply(this);
		var fields  = _getFields.apply(this);
		var options = form.formGetOptions();
		// check types and classes against validators
		fields.filter(options.filter).each(function(i, field) {
			$(field).removeData('form.errors');
			var curerrors = 0;
			for (ii in $.form.validators) {
				if ((form.formGetOptions().useClassAsType && $(field).hasClass(ii)) || $(field).formIsType(ii)) {
					if (!$(field).formIs(ii)) {
						var msg = $(field).formGetErrorMessage(ii);
						_add(field, 'errors', msg);
						curerrors++;
						errors++;
					}
				}
			}
		});
		// check dependencies if the current field is valid
		fields.each(function(i, field) {
			var dependencies = _get(field, 'dependencies');
			if (typeof dependencies !== 'undefined' && $(field).formGetErrors().length === 0) {
				$.each(dependencies, function(ii, dependency) {
					if ($.isFunction(dependency.callback) && !dependency.callback(form.get(0), field)) {
						var msg = typeof dependency.errorMessage !== 'undefined' ? dependency.errorMessage : $(field).formGetErrorMessage(ii);
						_add(field, 'errors', msg);
						errors++;
					}
				});
			}
		});
		return fields;
	};
	
	
	
	// DEPENDENCIES
	
	/**
	 * @name jQuery.fn.formSetDependency
	 * @description
	 *    Sets a dependency callback (or callbacks) to be executed when and if the specified field
	 *    passes all previous validation rules. The call back must return a boolean value. True
	 * es un pase, falso activa un error usando el mensaje pasado.
	 * @param {Function} fn La devolución de llamada que determina si se desencadena o no un error
	 * @ param {String} msg El mensaje para mostrar si fn devuelve falso
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('# input1'). formSetDependency (function () {
	 * if ($ ('# tu-nombre'). val () === '')
	 * devuelve verdadero;
	 * falso retorno;
	 *}, 'Este campo es obligatorio si se ingresa su nombre');
	 * /
	$ .fn.formAddDependency = function (fn, msg) {
		return _getFields.apply (this) .each (function (i, field) {
			_add (campo, 'dependencias', {callback: fn, errorMessage: msg});
		});
	};
	
	/ **
	 * @name jQuery.fn.formRemoveDependency
	 * @description
	 * Elimina una devolución de llamada de dependencia de un campo. Solo funciona con
	 * llamado devoluciones de llamada.
	 * @param {Function} fn
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('# input1'). formRemoveDependency (namedCallbackToRemove);
	 * /
	$ .fn.formRemoveDependency = function (fn) {
		return _getFields.apply (this) .each (function (i, field) {
			if (typeof fn === 'undefined') {
				$ (campo) .removeData ('form.dependencies');
			} else {
				_remove (campo, 'dependencias', fn);
			}
		});
	};
	
	
	
	// OPCIONES
	
	/ **
	 * @name jQuery.fn.formGetOptions
	 * @description
	 * Devuelve las opciones para el formulario, o formulario principal del campo
	 * @return {Object}
	 * @chainable falso
	 * 
	 * @ejemplo
	 * $ ('forma'). formGetOptions ();
	 * /
	$ .fn.formGetOptions = function () {
		var options = _getForm.apply (this) .data ('form.options');
		¿tipo de devolución de opciones === 'undefined'? {
			useClassAsType: verdadero,
			useTitleAsError: verdadero,
			validateOnBlurAfterSubmit: true,
			filter: ': enabled',
			ignorar: ': oculto',
			errorHandler: 'default',
			blurHandler: 'predeterminado',
			submitHandler: 'predeterminado',
			errorWrapper: 'etiqueta',
			errorClass: 'error'
		}: opciones;
	};
	
	/ **
	 * @name jQuery.fn.formSetOptions
	 * @description
	 * Establece opciones para el formulario, o formulario principal del campo
	 * Opciones de @param {Object}
	 * @return {Object}
	 * @chainable true
	 * 
	 * @ejemplo
	 * $ ('form'). formSetOptions ({
	 * ignore: 'input [type = "select"]',
	 * errorHandler: 'custom1',
	 * submitHandler: 'custom1'
	 *});
	 * /
	$ .fn.formSetOptions = function (opciones) {
		var $ form = _getForm.apply (esto);
		return $ form.data ('form.options', $ .extend ($ form.formGetOptions (), options));
	};
	
	
	
	// INTERNOS
	
	function _add (el, key, val) {
		return $ (el) .each (función (índice, campo) {
			var $ field = $ (campo);
			var c = $ field.data ('form.' + key);
			c = typeof c === 'undefined'? []: c;
			c [c.length] = val;
			$ field.data ('formulario' + clave, c);
		});
	};
	
	función _remove (el, key, val) {
		return $ (el) .each (función (índice, campo) {
			var $ field = $ (campo);
			var currentTypes = $ field.data ('form.' + key);
			
			if (typeof currentTypes === 'object') {
				var filtered = currentTypes.filter (function (t, i, arr) {
					return t! == val;
				});
				
				$ field.data ('form.' + clave, filtrada);
			}
		});
	};
	
	function _get (el, key) {
		devuelve $ (el) .eq (0) .data ('formulario' + clave);
	};
	
	function _addHandler (tipo, nombre, devolución de llamada) {
		$ .form.handlers [tipo] [nombre] = {};
		$ .form.handlers [tipo] [nombre] = devolución de llamada;
		
		return $ .form.handlers [tipo] [nombre];
	};
	
	function _isForm () {
		devuelve $ (this) .get (0) .tagName.toLowerCase () === 'form';
	}
	
	function _getForm () {
		devuelve _isForm.apply (esto)? $ (this) .eq (0): $ (this) .parents ('form'). eq (0);
	}
	
	function _getFields (el) {
		var options = _getForm.apply (this) .formGetOptions ();
		
		$ fields = _isForm.apply (esto)? $ (this) .find (': input'): $ (this) .filter (': input');
		
		if (opciones.ignore)
			$ fields = $ fields.not (options.ignore);
		
		if (opciones.filtro)
			$ fields = $ fields.filter (options.filter);
		
		devolver $ campos;
	}
	
	
	
	// MANIPULADORES DE ERRORES
	
	$ .form.addErrorHandler ('default', function ($ form, $ fields) {
		var options = $ form.formGetOptions ();
		var errors = $ fields.formGetErrors ();
		
		$ fields.removeClass (options.errorClass);
		$ fields.next (options.errorWrapper + '.' + options.errorClass) .remove ();
		
		para (var i en errores) {
			var $ field = errors [i] .field;
			var forAttr = options.errorWrapper === 'label' ? ' for="' + $field.attr('id') + '"' : '';
			
			$field.after('<' + options.errorWrapper + forAttr + ' class="' + options.errorClass + '">' + options[i].message + '</' + options.errorWrapper + '>');
		}
	});
	
	
	
	// SUBMIT HANDLERS
	
	$.form.addSubmitHandler('default', function($form, $fields) {
		var options = $form.formGetOptions();
		
		$form.find(options.errorWrapper + '.' + options.errorClass).remove();
		$fields.removeClass(options.errorClass);
		
		return true;
	});
	
	
	
	// VALIDATORS
	
	$.form.addValidator('required', function(form, field) {
		var $form  = $(form),
			$field = $(field);
		
		if ($field.is($form.formGetOptions().ignoreSelector))
			return false;
		
		if (/^\s*$/g.test(($field.val() || '').toString()))
			return false;
		
		if ($field.is(':checkbox') && !$field.is(':checked'))
			return false;
		
		return true;
	}, 'This field is required');
	
	$.form.addValidator('email', function(form, field) {
		var $form  = $(form),
		    $field = $(field);
		
		return 
			$field.is($form.formGetOptions().ignoreSelector)
				|| $field.val() === '' 
				|| /[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-zA-Z]+/.test($field.val());
	}, 'Please enter a valid email address');
	
	/**
	 * Checks to see if the value is a number
	 */
	$.form.addValidator('number', function(form, field) {
		var $field = $(field);
		
		return $field.val() === '' || /\d/.test($field.val());
	}, 'Value must contain a number');
	
	/**
	 * Validates a minimum value
	 */
	$.form.addValidator('min', function(form, field) {
		var $field = $(field);
		var val    = parseFloat(($field.val() || '').toString().replace(/[^\.^\-\d]/g, '') || 0);
		var min    = $field.data('form.validators.min.min');
		    min    = parseFloat(typeof min === 'number' ? min : $(min).val());
		
		return val >= min;
	}, 'Value is too small');
	
	/**
	 * Validates a maximum value
	 */
	$.form.addValidator('max', function(form, field) {
		var $field = $(field);
		var val    = parseFloat(($field.val() || '').toString().replace(/[^\.^\-\d]/g, '') || 0);
		var max    = $field.data('form.valiators.max.max');
		max        = parseFloat(typeof max === 'number' ? max : $(max).val());
		
		return val <= max;
	}, 'Value is to large');

})(jQuery);