/ *
 * jQuery validación plug-in 1.7
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright (c) 2006 - 2008 Jörn Zaefferer
 *
 * $ Id: jquery.validate.js 6403 2009-06-17 14: 27: 16Z joern.zaefferer $
 *
 * Doble licencia bajo las licencias de MIT y GPL:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * /

(función ($) {

$ .extend ($. fn, {
	// http://docs.jquery.com/Plugins/Validation/validate
	validate: function (opciones) {

		// si no se selecciona nada, no devuelva nada; no puede encadenar de todos modos
		if (! this.length) {
			opciones && options.debug && window.console && console.warn ("nada seleccionado, no se puede validar, no se devuelve nada");
			regreso;
		}

		// verificar si ya se creó un validador para este formulario
		var validator = $ .data (this [0], 'validator');
		if (validator) {
			validador de devolución;
		}
		
		validator = new $ .validator (opciones, esto [0]);
		$ .data (este [0], 'validador', validador); 
		
		if (validator.settings.onsubmit) {
		
			// permite suprimir la validación agregando una clase de cancelación al botón de enviar
			this.find ("input, button"). filter (". cancel"). click (function () {
				validator.cancelSubmit = true;
			});
			
			// cuando se utiliza un submitHandler, captura el botón de envío
			if (validator.settings.submitHandler) {
				this.find ("input, button"). filter (": submit"). click (function () {
					validator.submitButton = this;
				});
			}
		
			// valida el formulario al enviar
			this.submit (function (event) {
				if (validator.settings.debug)
					// evita que el formulario se envíe para poder ver la salida de la consola
					event.preventDefault ();
					
				handle de función () {
					if (validator.settings.submitHandler) {
						if (validator.submitButton) {
							// inserte una entrada oculta como reemplazo del botón de envío que falta
							var hidden = $ ("<input type = 'hidden' />"). attr ("nombre", validator.submitButton.name) .val (validator.submitButton.value) .appendTo (validator.currentForm);
						}
						validator.settings.submitHandler.call (validator, validator.currentForm);
						if (validator.submitButton) {
							// y limpiar después; gracias a no-block-scope, hidden puede ser referenciado
							hidden.remove ();
						}
						falso retorno;
					}
					devolver verdadero;
				}
					
				// evitar el envío de formularios no válidos o gestores de envío personalizados
				if (validator.cancelSubmit) {
					validator.cancelSubmit = false;
					return handle ();
				}
				if (validator.form ()) {
					if (validator.pendingRequest) {
						validator.formSubmitted = true;
						falso retorno;
					}
					return handle ();
				} else {
					validator.focusInvalid ();
					falso retorno;
				}
			});
		}
		
		validador de devolución;
	},
	// http://docs.jquery.com/Plugins/Validation/valid
	valid: function () {
        if ($ (this [0]). is ('form')) {
            devuelve this.validate (). form ();
        } else {
            var valid = true;
            var validator = $ (this [0] .form) .validate ();
            this.each (function () {
				valid & = validator.element (this);
            });
            regreso válido;
        }
    },
	// atributos: espacio separado de la lista de atributos para recuperar y eliminar
	removeAttrs: function (atributos) {
		var result = {},
			$ elemento = esto;
		$ .each (attributes.split (/ \ s /), función (índice, valor) {
			result [value] = $ element.attr (value);
			$ element.removeAttr (value);
		});
		resultado de devolución;
	},
	// http://docs.jquery.com/Plugins/Validation/rules
	reglas: función (comando, argumento) {
		var elemento = this [0];
		
		if (comando) {
			var settings = $ .data (element.form, 'validator'). settings;
			var staticRules = settings.rules;
			var existingRules = $ .validator.staticRules (element);
			cambiar (comando) {
			caso "agregar":
				$ .extend (existingRules, $ .validator.normalizeRule (argumento));
				staticRules [element.name] = existingRules;
				if (argument.messages)
					settings.messages [element.name] = $ .extend (settings.messages [element.name], argument.messages);
				descanso;
			caso "eliminar":
				if (! argument) {
					eliminar staticRules [element.name];
					devolver las reglas existentes;
				}
				var filtered = {};
				$ .each (argument.split (/ \ s /), function (index, method) {
					filtered [method] = existingRules [método];
					eliminar existingRules [método];
				});
				vuelta filtrada;
			}
		}
		
		var data = $ .validator.normalizeRules (
		$ .extend (
			{},
			$ .validator.metadataRules (elemento),
			$ .validator.classRules (elemento),
			$ .validator.attributeRules (elemento),
			$ .validator.staticRules (elemento)
		), elemento);
		
		// asegúrate de que se requiere al frente
		if (data.required) {
			var param = data.required;
			eliminar datos.required;
			data = $ .extend ({required: param}, data);
		}
		
		datos de retorno;
	}
});

// Selectores personalizados
$ .extend ($. expr [":"], {
	// http://docs.jquery.com/Plugins/Validation/blank
	blank: function (a) {return! $. trim ("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/filled
	filled: function (a) {return !! $. trim ("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/unchecked
	desactivado: función (a) {return! a.checked;}
});

// constructor para validador
$ .validator = function (opciones, formulario) {
	this.settings = $ .extend (true, {}, $ .validator.defaults, options);
	this.currentForm = forma;
	this.init ();
};

$ .validator.format = function (source, params) {
	if (arguments.length == 1) 
		función de retorno () {
			var args = $ .makeArray (argumentos);
			args.unshift (fuente);
			devuelve $ .validator.format.apply (esto, args);
		};
	if (arguments.length> 2 && params.constructor! = Array) {
		params = $ .makeArray (argumentos) .slice (1);
	}
	if (params.constructor! = Array) {
		params = [params];
	}
	$ .each (params, function (i, n) {
		source = source.replace (new RegExp ("\\ {" + i + "\\}", "g"), n);
	});
	fuente de retorno;
};

$ .extend ($. validator, {
	
	valores predeterminados: {
		mensajes: {},
		grupos: {},
		reglas: {},
		errorClass: "error",
		validClass: "válido",
		errorElement: "etiqueta",
		focusInvalid: cierto,
		errorContainer: $ ([]),
		errorLabelContainer: $ ([]),
		onsubmit: cierto,
		ignorar: [],
		ignoreTitle: falso,
		onfocusin: function (elemento) {
			this.lastActive = elemento;
				
			// ocultar la etiqueta de error y eliminar la clase de error en el foco si está habilitado
			if (this.settings.focusCleanup &&! this.blockFocusCleanup) {
				this.settings.unhighlight && this.settings.unhighlight.call (this, element, this.settings.errorClass, this.settings.validClass);
				this.errorsFor (element) .hide ();
			}
		},
		onfocusout: function (elemento) {
			if (! this.checkable (elemento) && (element.name en this.submitted ||! this.optional (elemento))) {
				este elemento (elemento);
			}
		},
		onkeyup: function (elemento) {
			if (element.name en this.submitted || element == this.lastElement) {
				este elemento (elemento);
			}
		},
		onclick: function (elemento) {
			// haga clic en selects, radiobuttons y checkboxes
			if (element.name en this.submitted)
				este elemento (elemento);
			// o elementos de opciones, verifique la selección principal en ese caso
			else if (element.parentNode.name en this.submitted)
				this.element (element.parentNode);
		},
		highlight: function (elemento, errorClass, validClass) {
			$ (elemento) .addClass (errorClass) .removeClass (validClass);
		},
		unhighlight: function (element, errorClass, validClass) {
			$ (elemento) .removeClass (errorClass) .addClass (validClass);
		}
	},

	// http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
	setDefaults: function (configuración) {
		$ .extend ($ .validator.defaults, settings);
	},

	mensajes: {
		requerido: "Campo Obligatorio.",
		remoto: "Debes responde esta pregunta.",
		correo electrónico: "E-mail incorrecto.",
		url: "Ingrese una URL válida",
		fecha: "Ingrese una fecha válida.",
		dateISO: "Ingrese una fecha válida (ISO).",
		número: "S & oacute; lo n & uacute; meros.",
		dígitos: "Ingrese solo dígitos",
		tarjeta de crédito: "Ingrese un número de tarjeta de crédito válido",
		equalTo: "Por favor ingrese el mismo valor nuevamente.",
		aceptar: "Ingrese un valor con una extensión válida",
		maxlength: $ .validator.format ("M & aacute; ximo {0} caracteres."),
		minlength: $ .validator.format ("M & iacute; nimo {0} caracteres."),
		rangelength: $ .validator.format ("Ingrese un valor entre {0} y {1} caracteres de longitud."),
		rango: $ .validator.format ("Ingrese un valor entre {0} y {1}."),
		max: $ .validator.format ("Ingrese un valor inferior o igual a {0}."),
		min: $ .validator.format ("Ingrese un valor mayor o igual que {0}.")
	},
	
	autoCreateRanges: falso,
	
	prototipo: {
		
		init: function () {
			this.labelContainer = $ (this.settings.errorLabelContainer);
			this.errorContext = this.labelContainer.length && this.labelContainer || $ (this.currentForm);
			this.containers = $ (this.settings.errorContainer) .add (this.settings.errorLabelContainer);
			this.submitted = {};
			this.valueCache = {};
			this.pendingRequest = 0;
			this.pending = {};
			this.invalid = {};
			this.reset ();
			
			var groups = (this.groups = {});
			$ .each (this.settings.groups, function (clave, valor) {
				$ .each (value.split (/ \ s /), function (index, name) {
					grupos [nombre] = clave;
				});
			});
			var rules = this.settings.rules;
			$ .each (reglas, función (clave, valor) {
				rules [key] = $ .validator.normalizeRule (value);
			});
			
			función delegado (evento) {
				var validator = $ .data (this [0] .form, "validator"),
					eventType = "on" + event.type.replace (/ ^ validate /, "");
				validator.settings [eventType] && validator.settings [eventType] .call (validator, this [0]);
			}
			$ (this.currentForm)
				.validateDelegate (": text,: password,: file, select, textarea", "focusin focusout keyup", delegar)
				.validateDelegate (": radio,: casilla de verificación, seleccionar, opción", "clic", delegar);

			if (this.settings.invalidHandler)
				$ (this.currentForm) .bind ("invalid-form.validate", this.settings.invalidHandler);
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/form
		formulario: función () {
			this.checkForm ();
			$ .extend (this.submitted, this.errorMap);
			this.invalid = $ .extend ({}, this.errorMap);
			if (! this.valid ())
				$ (this.currentForm) .triggerHandler ("invalid-form", [this]);
			this.showErrors ();
			devuelve this.valid ();
		},
		
		checkForm: function () {
			this.prepareForm ();
			for (var i = 0, elements = (this.currentElements = this.elements ()); elements [i]; i ++) {
				this.check (elementos [i]);
			}
			devuelve this.valid (); 
		},
		
		// http://docs.jquery.com/Plugins/Validation/Validator/element
		elemento: función (elemento) {
			element = this.clean (elemento);
			this.lastElement = elemento;
			this.prepareElement (elemento);
			this.currentElements = $ (elemento);
			var result = this.check (elemento);
			if (resultado) {
				eliminar this.invalid [element.name];
			} else {
				this.invalid [element.name] = true;
			}
			if (! this.numberOfInvalids ()) {
				// Ocultar contenedores de error en el último error
				this.toHide = this.toHide.add (this.containers);
			}
			this.showErrors ();
			resultado de devolución;
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/showErrors
		showErrors: function (errors) {
			if (errores) {
				// agrega elementos a la lista de errores y al mapa
				$ .extend (this.errorMap, errors);
				this.errorList = [];
				para (var nombre en errores) {
					this.errorList.push ({
						mensaje: errores [nombre],
						elemento: this.findByName (nombre) [0]
					});
				}
				// eliminar elementos de la lista de éxitos
				this.successList = $ .grep (this.successList, function (element) {
					return! (element.name en errores);
				});
			}
			this.settings.showErrors
				? this.settings.showErrors.call (this, this.errorMap, this.errorList)
				: this.defaultShowErrors ();
		},
		
		// http://docs.jquery.com/Plugins/Validation/Validator/resetForm
		resetForm: function () {
			if ($ .fn.resetForm)
				$ (this.currentForm) .resetForm ();
			this.submitted = {};
			this.prepareForm ();
			this.hideErrors ();
			this.elements (). removeClass (this.settings.errorClass);
		},
		
		numberOfInvalids: function () {
			devuelve this.objectLength (this.invalid);
		},
		
		objectLength: function (obj) {
			var count = 0;
			para (var i en obj)
				contar ++;
			recuento de devolución;
		},
		
		hideErrors: function () {
			this.addWrapper (this.toHide) .hide ();
		},
		
		valid: function () {
			return this.size () == 0;
		},
		
		tamaño: función () {
			devuelve this.errorList.length;
		},
		
		focusInvalid: function () {
			if (this.settings.focusInvalid) {
				tratar {
					$ (this.findLastActive () || this.errorList.length && this.errorList [0] .element || [])
					.filter (": visible")
					.atención()
					// activa manualmente el evento focusin; sin él, no se llama al controlador de foco, findLastActive no tendrá nada que encontrar
					.trigger ("focusin");
				} catch (e) {
					// ignorar IE arrojando errores al enfocar elementos ocultos
				}
			}
		},
		
		findLastActive: function () {
			var lastActive = this.lastActive;
			return lastActive && $ .grep (this.errorList, function (n) {
				return n.element.name == lastActive.name;
			}). length == 1 && lastActive;
		},
		
		elementos: function () {
			validador var = esto,
				rulesCache = {};
			
			// selecciona todas las entradas válidas dentro del formulario (sin botones de enviar o restablecer)
			// solución alternativa $ Query ([]). agregue hasta que se resuelva http://dev.jquery.com/ticket/2114
			return $ ([]). add (this.currentForm.elements)
			.filter (": entrada")
			.not (": submit,: reset,: image, [disabled]")
			.no (this.settings.ignore)
			.filter (función () {
				! this.name && validator.settings.debug && window.console && console.error ("% o no tiene nombre asignado", esto);
			
				// selecciona solo el primer elemento para cada nombre, y solo aquellos con reglas especificadas
				if (this.name en rulesCache ||! validator.objectLength ($ (this) .rules ()))
					falso retorno;
				
				rulesCache [this.name] = true;
				devolver verdadero;
			});
		},
		
		clean: function (selector) {
			return $ (selector) [0];
		},
		
		errores: function () {
			return $ (this.settings.errorElement + "." + this.settings.errorClass, this.errorContext);
		},
		
		reset: function () {
			this.successList = [];
			this.errorList = [];
			this.errorMap = {};
			this.toShow = $ ([]);
			this.toHide = $ ([]);
			this.currentElements = $ ([]);
		},
		
		prepareForm: function () {
			this.reset ();
			this.toHide = this.errors (). add (this.containers);
		},
		
		prepareElement: function (element) {
			this.reset ();
			this.toHide = this.errorsFor (elemento);
		},
	
		check: function (elemento) {
			element = this.clean (elemento);
			
			// si radio / checkbox, valida el primer elemento en grupo en su lugar
			if (this.checkable (element)) {
				element = this.findByName (element.name) [0];
			}
			
			var rules = $ (element) .rules ();
			var dependencyMismatch = false;
			para (método en reglas) {
				var rule = {method: method, parameters: rules [method]};
				tratar {
					var result = $ .validator.methods [method] .call (this, element.value.replace (/ \ r / g, ""), element, rule.parameters);
					
					// si un método indica que el campo es opcional y por lo tanto válido,
					// no lo marque como válido cuando no hay otras reglas
					if (resultado == "dependencia-desajuste") {
						dependencyMismatch = true;
						continuar;
					}
					dependencyMismatch = false;
					
					if (resultado == "pendiente") {
						this.toHide = this.toHide.not (this.errorsFor (elemento));
						regreso;
					}
					
					if (! resultado) {
						this.formatAndAdd (elemento, regla);
						falso retorno;
					}
				} catch (e) {
					this.settings.debug && window.console && console.log ("excepción ocurrida al verificar el elemento" + element.id
						 + ", verifique el '' '+ método + regla.metodo +' ', e);
					arrojar e;
				}
			}
			if (dependencyMismatch)
				regreso;
			if (this.objectLength (reglas))
				this.successList.push (elemento);
			devolver verdadero;
		},
		
		// devuelve el mensaje personalizado para el elemento dado y el método de validación
		// especificado en los metadatos "mensajes" del elemento
		customMetaMessage: function (elemento, método) {
			if (! $. metadata)
				regreso;
			
			var meta = this.settings.meta
				? $ (elemento) .metadata () [this.settings.meta]
				: $ (elemento) .metadata ();
			
			return meta && meta.messages && meta.messages [method];
		},
		
		// devuelve el mensaje personalizado para el nombre del elemento y el método de validación dados
		customMessage: function (nombre, método) {
			var m = this.settings.messages [nombre];
			return m && (m.constructor == Cadena
				? metro
				: m [método]);
		},
		
		// devuelve el primer argumento definido, permitiendo cadenas vacías
		findDefined: function () {
			para (var i = 0; i <arguments.length; i ++) {
				if (argumentos [i]! == indefinido)
					devolver argumentos [i];
			}
			regreso indefinido;
		},
		
		defaultMessage: function (elemento, método) {
			return this.findDefined (
				this.customMessage (element.name, method),
				this.customMetaMessage (elemento, método),
				// el título nunca está indefinido, así que maneje la cadena vacía como indefinida
				! this.settings.ignoreTitle && element.title || indefinido,
				$ .validator.messages [método],
				"<strong> Advertencia: no se definió ningún mensaje para" + element.name + "</ strong>"
			);
		},
		
		formatAndAdd: function (element, rule) {
			var message = this.defaultMessage (element, rule.method),
				theregex = / \ $? \ {(\ d +) \} / g;
			if (tipo de mensaje == "función") {
				message = message.call (this, rule.parameters, element);
			} else if (test.ejex.us (mensaje)) {
				message = jQuery.format (message.replace (theregex, '{$ 1}'), rule.parameters);
			}			
			this.errorList.push ({
				mensaje: mensaje,
				elemento: elemento
			});
			
			this.errorMap [element.name] = mensaje;
			this.submitted [element.name] = mensaje;
		},
		
		addWrapper: function (toToggle) {
			if (this.settings.wrapper)
				toToggle = toToggle.add (toToggle.parent (this.settings.wrapper));
			regresar a Toggle;
		},
		
		defaultShowErrors: function () {
			for (var i = 0; this.errorList [i]; i ++) {
				var error = this.errorList [i];
				this.settings.highlight && this.settings.highlight.call (this, error.element, this.settings.errorClass, this.settings.validClass);
				this.showLabel (error.element, error.message);
			}
			if (this.errorList.length) {
				this.toShow = this.toShow.add (this.containers);
			}
			if (this.settings.success) {
				for (var i = 0; this.successList [i]; i ++) {
					this.showLabel (this.successList [i]);
				}
			}
			if (this.settings.unhighlight) {
				for (var i = 0, elements = this.validElements (); elements [i]; i ++) {
					this.settings.unhighlight.call (esto, elementos [i], this.settings.errorClass, this.settings.validClass);
				}
			}
			this.toHide = this.toHide.not (this.toShow);
			this.hideErrors ();
			this.addWrapper (this.toShow) .show ();
		},
		
		Elementos válidos: function () {
			return this.currentElements.not (this.invalidElements ());
		},
		
		invalidElements: function () {
			return $ (this.errorList) .map (function () {
				devuelve este elemento;
			});
		},
		
		showLabel: función (elemento, mensaje) {
			var label = this.errorsFor (elemento);
			if (label.length) {
				// refresh error / success class
				label.removeClass (). addClass (this.settings.errorClass);
			
				// verificar si tenemos una etiqueta generada, reemplazar el mensaje y luego
				label.attr ("generado") && label.html (mensaje);
			} else {
				// crear etiqueta
				label = $ ("<" + this.settings.errorElement + "/>")
					.attr ({"para": this.idOrName (elemento), generado: verdadero})
					.addClass (this.settings.errorClass)
					.html (mensaje || "");
				if (this.settings.wrapper) {
					// asegúrese de que el elemento esté visible, incluso en IE
					// realmente muestra que el elemento envuelto se maneja en otro lado
					label = label.hide (). show (). wrap ("<" + this.settings.wrapper + "/>") parent ();
				}
				if (! this.labelContainer.append (label) .length)
					this.settings.errorPlacement
						? this.settings.errorPlacement (label, $ (element))
						: label.insertAfter (elemento);
			}
			if (! message && this.settings.success) {
				label.text ("");
				typeof this.settings.success == "cadena"
					? label.addClass (this.settings.success)
					: this.settings.success (label);
			}
			this.toShow = this.toShow.add (label);
		},
		
		errorsFor: function (element) {
			var name = this.idOrName (elemento);
    		return this.errors (). filter (function () {
				return $ (this) .attr ('for') == nombre;
			});
		},
		
		idOrName: función (elemento) {
			devuelve this.groups [element.name] || (this.checkable (element)? element.name: element.id || element.name);
		},

		seleccionable: función (elemento) {
			devuelve /radio|checkbox/i.test(element.type);
		},
		
		findByName: function (name) {
			// seleccionar por nombre y filtrar por formulario para el rendimiento sobre form.find ("[name = ...]")
			var form = this.currentForm;
			return $ (document.getElementsByName (name)). map (función (índice, elemento) {
				return element.form == form && element.name == nombre && elemento || nulo;
			});
		},
		
		getLength: function (value, element) {
			switch (element.nodeName.toLowerCase ()) {
			caso 'seleccionar':
				return $ ("option: selected", element) .length;
			caso 'entrada':
				if (this.checkable (elemento))
					devuelve this.findByName (element.name) .filter (': checked'). length;
			}
			return value.length;
		},
	
		depend: function (param, element) {
			return this.dependTypes [typeof param]
				? this.dependTypes [typeof param] (param, element)
				: cierto;
		},
	
		dependTypes: {
			"boolean": function (param, element) {
				return param;
			},
			"cadena": función (param, elemento) {
				return !! $ (param, element.form) .length;
			},
			"función": función (param, elemento) {
				return param (elemento);
			}
		},
		
		opcional: función (elemento) {
			return! $. validator.methods.required.call (this, $ .trim (element.value), element) && "dependent-mismatch";
		},
		
		startRequest: function (element) {
			if (! this.pending [element.name]) {
				this.pendingRequest ++;
				this.pending [element.name] = true;
			}
		},
		
		stopRequest: function (elemento, válido) {
			this.pendingRequest--;
			// a veces la sincronización falla, asegúrese de que pendingRequest nunca sea <0
			if (this.pendingRequest <0)
				this.pendingRequest = 0;
			elimine esto.pending [element.name];
			if (válido && this.pendingRequest == 0 && this.formSubmitted && this.form ()) {
				$ (this.currentForm) .submit ();
				this.formSubmitted = false;
			} else if (! valid && this.pendingRequest == 0 && this.formSubmitted) {
				$ (this.currentForm) .triggerHandler ("invalid-form", [this]);
				this.formSubmitted = false;
			}
		},
		
		previousValue: function (element) {
			return $ .data (elemento, "previousValue") || $ .data (element, "previousValue", {
				viejo: nulo,
				válido: cierto,
				mensaje: this.defaultMessage (elemento, "remoto")
			});
		}
		
	},
	
	classRuleSettings: {
		requerido: {required: true},
		correo electrónico: {email: true},
		url: {url: true},
		fecha: {date: true},
		dateISO: {dateISO: true},
		dateDE: {dateDE: true},
		número: {number: true},
		númeroDE: {numberDE: true},
		dígitos: {dígitos: verdadero},
		tarjeta de crédito: {tarjeta de crédito: true}
	},
	
	addClassRules: function (className, rules) {
		className.constructor == ¿Cadena?
			this.classRuleSettings [className] = reglas:
			$ .extend (this.classRuleSettings, className);
	},
	
	classRules: function (element) {
		var rules = {};
		var classes = $ (element) .attr ('class');
		classes && $ .each (classes.split (''), function () {
			if (esto en $ .validator.classRuleSettings) {
				$ .extend (rules, $ .validator.classRuleSettings [this]);
			}
		});
		reglas de devolución;
	},
	
	attributeRules: function (element) {
		var rules = {};
		var $ element = $ (elemento);
		
		for (método en $ .validator.methods) {
			var value = $ element.attr (método);
			if (valor) {
				reglas [método] = valor;
			}
		}
		
		// maxlength se puede devolver como -1, 2147483647 (IE) y 524288 (safari) para entradas de texto
		if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
			eliminar rules.maxlength;
		}
		
		reglas de devolución;
	},
	
	metadataRules: function (element) {
		if (! $. metadata) return {};
		
		var meta = $ .data (element.form, 'validator'). settings.meta;
		devolver meta?
			$ (elemento) .metadata () [meta]:
			$ (elemento) .metadata ();
	},
	
	staticRules: function (element) {
		var rules = {};
		var validator = $ .data (element.form, 'validator');
		if (validator.settings.rules) {
			rules = $ .validator.normalizeRule (validator.settings.rules [element.name]) || {};
		}
		reglas de devolución;
	},
	
	normalizeRules: function (rules, element) {
		// manejar la verificación de dependencia
		$ .each (reglas, función (prop, val) {
			// ignorar la regla cuando param es explícitamente falso, ej. requerido: falso
			if (val === falso) {
				eliminar reglas [prop];
				regreso;
			}
			if (val.param || val.depends) {
				var keepRule = verdadero;
				switch (typeof val.depends) {
					caso "cadena":
						keepRule = !! $ (val.depends, element.form) .length;
						descanso;
					caso "función":
						keepRule = val.depends.call (elemento, elemento);
						descanso;
				}
				if (keepRule) {
					rules [prop] = val.param! == undefined? val.param: verdadero;
				} else {
					eliminar reglas [prop];
				}
			}
		});
		
		// evaluar los parámetros
		$ .each (reglas, función (regla, parámetro) {
			rules [rule] = $ .isFunction (parámetro)? parámetro (elemento): parámetro;
		});
		
		// parámetros de número limpio
		$ .each (['minlength', 'maxlength', 'min', 'max'], function () {
			if (rules [this]) {
				rules [this] = Number (rules [this]);
			}
		});
		$ .each (['rangelength', 'range'], function () {
			if (rules [this]) {
				rules [this] = [Number (rules [this] [0]), Number (rules [this] [1])];
			}
		});
		
		if ($ .validator.autoCreateRanges) {
			// auto-crea rangos
			if (rules.min && rules.max) {
				rules.range = [rules.min, rules.max];
				eliminar rules.min;
				eliminar rules.max;
			}
			if (rules.minlength && rules.maxlength) {
				rules.rangelength = [rules.minlength, rules.maxlength];
				eliminar rules.minlength;
				eliminar rules.maxlength;
			}
		}
		
		// Para admitir mensajes personalizados en metadatos, ignore los métodos de reglas titulados "mensajes"
		if (rules.messages) {
			eliminar reglas.mensajes;
		}
		
		reglas de devolución;
	},
	
	// Convierte una cadena simple a una regla {string: true}, por ejemplo, "required" a {required: true}
	normalizeRule: function (data) {
		if (tipo de datos == "cadena") {
			var changed = {};
			$ .each (data.split (/ \ s /), function () {
				transformado [esto] = verdadero;
			});
			datos = transformado;
		}
		datos de retorno;
	},
	
	// http://docs.jquery.com/Plugins/Validation/Validator/addMethod
	addMethod: function (nombre, método, mensaje) {
		$ .validator.methods [name] = método;
		$ .validator.messages [name] = message! = undefined? mensaje: $ .validator.messages [nombre];
		if (method.length <3) {
			$ .validator.addClassRules (name, $ .validator.normalizeRule (name));
		}
	},

	métodos: {

		// http://docs.jquery.com/Plugins/Validation/Methods/required
		required: function (value, element, param) {
			// verifica si se cumple la dependencia
			if (! this.depend (param, element))
				return "dependencia-desajuste";
			switch (element.nodeName.toLowerCase ()) {
			caso 'seleccionar':
				// podría ser una matriz para select-multiple o una cadena, ambos están bien de esta manera
				var val = $ (elemento) .val ();
				return val && val.length> 0;
			caso 'entrada':
				if (this.checkable (elemento))
					devuelve this.getLength (value, element)> 0;
			defecto:
				return $ .trim (valor) .length> 0;
			}
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/remote
		remote: function (value, element, param) {
			if (this.optional (elemento))
				return "dependencia-desajuste";
			
			var previous = this.previousValue (elemento);
			if (! this.settings.messages [element.name])
				this.settings.messages [element.name] = {};
			previous.originalMessage = this.settings.messages [element.name] .remote;
			this.settings.messages [element.name] .remote = previous.message;
			
			param = typeof param == "cadena" && {url: param} || param;
			
			if (previous.old! == value) {
				previous.old = value;
				var validator = this;
				this.startRequest (elemento);
				var data = {};
				data [element.name] = value;
				$ .ajax ($. extender (verdadero, {
					url: param,
					modo: "abortar",
					puerto: "validate" + element.name,
					dataType: "json",
					datos: datos,
					éxito: función (respuesta) {
						validator.settings.messages [element.name] .remote = previous.originalMessage;
						var valid = respuesta === verdadero;
						if (válido) {
							var submitted = validator.formSubmitted;
							validator.prepareElement (elemento);
							validator.formSubmitted = enviado;
							validator.successList.push (elemento);
							validator.showErrors ();
						} else {
							var errors = {};
							var message = (mensaje.Previo = respuesta || validator.defaultMessage (elemento, "remoto"));
							errors [element.name] = $ .isFunction (message)? mensaje (valor): mensaje;
							validator.showErrors (errores);
						}
						previous.valid = valid;
						validator.stopRequest (elemento, válido);
					}
				}, param));
				devolver "pendiente";
			} else if (this.pending [element.name]) {
				devolver "pendiente";
			}
			return previous.valid;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/minlength
		minlength: function (value, element, param) {
			return this.optional (elemento) || this.getLength ($. trim (valor), elemento)> = param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/maxlength
		maxlength: function (value, element, param) {
			return this.optional (elemento) || this.getLength ($. trim (valor), elemento) <= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/rangelength
		rangelength: function (value, element, param) {
			var length = this.getLength ($. trim (valor), elemento);
			return this.optional (elemento) || (longitud> = param [0] && length <= param [1]);
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/min
		min: function (value, element, param) {
			return this.optional (elemento) || valor> = param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/max
		max: function (value, element, param) {
			return this.optional (elemento) || valor <= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/range
		rango: función (valor, elemento, parámetro) {
			return this.optional (elemento) || (valor> = param [0] && value <= param [1]);
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/email
		correo electrónico: función (valor, elemento) {
			// contribuido por Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
			return this.optional (elemento) || / ^ ((([az] | \ d | [! # \ $% & '\ * \ + \ - \ / = \? \ ^ _ `{\ |} ~] | [\ u00A0- \ uD7FF \ uF900 - \ uFDCF \ uFDF0- \ uFFEF]) + (\. ([az] | \ d | [! # \ $% & '\ * \ + \ - \ / = \? \ ^ _ `{\ |} ~ ] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) +) *) | ((\ x22) ((((\ x20 | \ x09) * (\ x0d \ x0a))? ( \ x20 | \ x09) +)? (([\ x01- \ x08 \ x0b \ x0c \ x0e- \ x1f \ x7f] | \ x21 | [\ x23- \ x5b] | [\ x5d- \ x7e] | [ \ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (\\ ([\ x01- \ x09 \ x0b \ x0c \ x0d- \ x7f] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF])))) * (((\ x20 | \ x09) * (\ x0d \ x0a))? (\ x20 | \ x09) +)? (\ x22))) @ ((([ az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (([az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF ]) ([az] | \ d | - | \. | _ | ~ | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) * ([az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]))) \.) + (([az] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (([az] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) ([az] | \ d | - | \.
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/url
		url: función (valor, elemento) {
			// contribuido por Scott Gonzalez: http://projects.scottsplayground.com/iri/
			return this.optional (elemento) || /^(https?|ftp):\/\/((((az]|\d|-|\||||||[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF] ) | (% [\ da-f] {2}) | [! \ $ & '\ (\) \ * \ +,; =] |:) * @)? (((\ d | [1-9 ] \ d | 1 \ d \ d | 2 [0-4] \ d | 25 [0-5]) \. (\ d | [1-9] \ d | 1 \ d \ d | 2 [0- 4] \ d | 25 [0-5]) \. (\ D | [1-9] \ d | 1 \ d \ d | 2 [0-4] \ d | 25 [0-5]) \. (\ d | [1-9] \ d | 1 \ d \ d | 2 [0-4] \ d | 25 [0-5])) | ((([az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (([az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) ([az] | \ d | - | \. | _ | ~ | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) * ([az] | \ d | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]))) \.) + (([az] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (([az] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) ([az] | \ d | - | \. | _ | ~ | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) * ([az] | [\ u00A0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]))) \.?) (: \ d *)?) (\ / ((([az] | \ d | - | \ | | _ | ~ | [\ u00a0- \ uD7FF \ uF900- \ uFDCF \ uFDF0- \ uFFEF]) | (% [\ da-f] {2}) | [!
		},
        
		// http://docs.jquery.com/Plugins/Validation/Methods/date
		fecha: función (valor, elemento) {
			return this.optional (elemento) || ! / Inválido | NaN / .test (nueva Fecha (valor));
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/dateISO
		dateISO: function (value, element) {
			return this.optional (elemento) || /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value);
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/number
		número: función (valor, elemento) {
			return this.optional (elemento) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(value);
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/digits
		dígitos: función (valor, elemento) {
			return this.optional (elemento) || /^\d+$/.test(value);
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/creditcard
		// basado en http://en.wikipedia.org/wiki/Luhn
		tarjeta de crédito: función (valor, elemento) {
			if (this.optional (elemento))
				return "dependencia-desajuste";
			// acepta solo dígitos y guiones
			if (/[^0-9-]+/.test(value))
				falso retorno;
			var nCheck = 0,
				nDigit = 0,
				bEven = falso;

			value = value.replace (/ \ D / g, "");

			for (var n = value.length - 1; n> = 0; n--) {
				var cDigit = value.charAt (n);
				var nDigit = parseInt (cDigit, 10);
				if (bEven) {
					if ((nDigit * = 2)> 9)
						nDigit - = 9;
				}
				nCheck + = nDigit;
				bEven =! bEven;
			}

			return (nCheck% 10) == 0;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/accept
		accept: function (value, element, param) {
			param = typeof param == "cadena"? param.replace (/, / g, '|'): "png | jpe? g | gif";
			return this.optional (elemento) || value.match (nuevo RegExp (". (" + param + ") $", "i"));
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/equalTo
		equalTo: function (value, element, param) {
			// se une al evento de desenfoque del objetivo para revalidar cada vez que se actualiza el campo de destino
			// TODO encuentra una forma de vincular el evento solo una vez, evitando la sobrecarga de unbind-rebind
			var target = $ (param) .unbind (". validate-equalTo"). bind ("blur.validate-equalTo", function () {
				$ (elemento) .valid ();
			});
			valor de retorno == target.val ();
		}
		
	}
	
});

// obsoleto, use $ .validator.format en su lugar
$ .format = $ .validator.format;

}) (jQuery);

// modo ajax: abortar
// uso: $ .ajax ({modo: "abortar" [, puerto: "puerto único"]});
// si se usa el modo: "abortar", la solicitud previa en ese puerto (el puerto puede estar indefinido) se cancela mediante XMLHttpRequest.abort () 
; (función ($) {
	var ajax = $ .ajax;
	var pendingRequests = {};
	$ .ajax = function (configuración) {
		// crea configuraciones para la compatibilidad con ajaxSetup
		settings = $ .extend (settings, $ .extend ({}, $ .ajaxSettings, settings));
		var port = settings.port;
		if (settings.mode == "abortar") {
			if (pendingRequests [puerto]) {
				pendingRequests [puerto] .abort ();
			}
			return (pendingRequests [puerto] = ajax.apply (esto, argumentos));
		}
		devuelve ajax.apply (esto, argumentos);
	};
}) (jQuery);

// proporciona focusin y eventos de enfoque entre navegadores
// IE tiene soporte nativo, en otros navegadores, usa caputuring de eventos (sin burbujas)

// proporciona un complemento delegado (tipo: Cadena, delegado: Selector, controlador: Devolución de llamada) para facilitar la delegación de eventos
// handler solo se llama cuando $ (event.target) .is (delegate), en el ámbito del objeto jquery para event.target 
; (función ($) {
	// solo implementado si no es provisto por jQuery core (desde 1.4)
	// TODO verifica si la implementación de jQuery 1.4 es compatible con las antiguas API de eventos especiales de jQuery
	if (! jQuery.event.special.focusin &&! jQuery.event.special.focusout && document.addEventListener) {
		$ .each ({
			foco: 'enfocar',
			desenfoque: 'enfoque'	
		}, función (original, corregir) {
			$ .event.special [fix] = {
				setup: function () {
					this.addEventListener (original, controlador, verdadero);
				},
				desmontaje: función () {
					this.removeEventListener (original, controlador, verdadero);
				},
				manejador: función (e) {
					argumentos [0] = $ .event.fix (e);
					argumentos [0] .type = arreglo;
					devuelve $ .event.handle.apply (esto, argumentos);
				}
			};
			manejador de funciones (e) {
				e = $ .event.fix (e);
				e.type = fix;
				return $ .event.handle.call (esto, e);
			}
		});
	};
	$ .extend ($. fn, {
		validateDelegate: function (delegate, type, handler) {
			return this.bind (tipo, función (evento) {
				var target = $ (event.target);
				if (target.is (delegado)) {
					return handler.apply (objetivo, argumentos);
				}
			});
		}
	});
}) (jQuery);