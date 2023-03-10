<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<!-- <script src="../../tailwind1.config.js"></script> -->
	<script>
		tailwind.config = {
			theme: {
				screens: {
					'xs': '320px',
					'sm': '640px',
					'md': '768px',
					'lg': '1024px',
					'xl': '1280px',
					'2xl': '1536px',
				},
				extend: {
					colors: {
						clifford: '#da373d',
					},
					spacing: {
						'192vh': '192vh',
						'222vh': '222vh',
						'92vh': '92vh',
						'94vh': '94vh',
						'135vh': '135vh',
						'91vh': '91vh',
					},
				}
			}
		}
	</script>
	<script>
		/* PrismJS 1.29.0
https://prismjs.com/download.html#themes=prism-tomorrow&languages=markup+css+clike+javascript */
		var _self = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : {},
			Prism = function(e) {
				var n = /(?:^|\s)lang(?:uage)?-([\w-]+)(?=\s|$)/i,
					t = 0,
					r = {},
					a = {
						manual: e.Prism && e.Prism.manual,
						disableWorkerMessageHandler: e.Prism && e.Prism.disableWorkerMessageHandler,
						util: {
							encode: function e(n) {
								return n instanceof i ? new i(n.type, e(n.content), n.alias) : Array.isArray(n) ? n.map(e) : n.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/\u00a0/g, " ")
							},
							type: function(e) {
								return Object.prototype.toString.call(e).slice(8, -1)
							},
							objId: function(e) {
								return e.__id || Object.defineProperty(e, "__id", {
									value: ++t
								}), e.__id
							},
							clone: function e(n, t) {
								var r, i;
								switch (t = t || {}, a.util.type(n)) {
									case "Object":
										if (i = a.util.objId(n), t[i]) return t[i];
										for (var l in r = {}, t[i] = r, n) n.hasOwnProperty(l) && (r[l] = e(n[l], t));
										return r;
									case "Array":
										return i = a.util.objId(n), t[i] ? t[i] : (r = [], t[i] = r, n.forEach((function(n, a) {
											r[a] = e(n, t)
										})), r);
									default:
										return n
								}
							},
							getLanguage: function(e) {
								for (; e;) {
									var t = n.exec(e.className);
									if (t) return t[1].toLowerCase();
									e = e.parentElement
								}
								return "none"
							},
							setLanguage: function(e, t) {
								e.className = e.className.replace(RegExp(n, "gi"), ""), e.classList.add("language-" + t)
							},
							currentScript: function() {
								if ("undefined" == typeof document) return null;
								if ("currentScript" in document) return document.currentScript;
								try {
									throw new Error
								} catch (r) {
									var e = (/at [^(\r\n]*\((.*):[^:]+:[^:]+\)$/i.exec(r.stack) || [])[1];
									if (e) {
										var n = document.getElementsByTagName("script");
										for (var t in n)
											if (n[t].src == e) return n[t]
									}
									return null
								}
							},
							isActive: function(e, n, t) {
								for (var r = "no-" + n; e;) {
									var a = e.classList;
									if (a.contains(n)) return !0;
									if (a.contains(r)) return !1;
									e = e.parentElement
								}
								return !!t
							}
						},
						languages: {
							plain: r,
							plaintext: r,
							text: r,
							txt: r,
							extend: function(e, n) {
								var t = a.util.clone(a.languages[e]);
								for (var r in n) t[r] = n[r];
								return t
							},
							insertBefore: function(e, n, t, r) {
								var i = (r = r || a.languages)[e],
									l = {};
								for (var o in i)
									if (i.hasOwnProperty(o)) {
										if (o == n)
											for (var s in t) t.hasOwnProperty(s) && (l[s] = t[s]);
										t.hasOwnProperty(o) || (l[o] = i[o])
									} var u = r[e];
								return r[e] = l, a.languages.DFS(a.languages, (function(n, t) {
									t === u && n != e && (this[n] = l)
								})), l
							},
							DFS: function e(n, t, r, i) {
								i = i || {};
								var l = a.util.objId;
								for (var o in n)
									if (n.hasOwnProperty(o)) {
										t.call(n, o, n[o], r || o);
										var s = n[o],
											u = a.util.type(s);
										"Object" !== u || i[l(s)] ? "Array" !== u || i[l(s)] || (i[l(s)] = !0, e(s, t, o, i)) : (i[l(s)] = !0, e(s, t, null, i))
									}
							}
						},
						plugins: {},
						highlightAll: function(e, n) {
							a.highlightAllUnder(document, e, n)
						},
						highlightAllUnder: function(e, n, t) {
							var r = {
								callback: t,
								container: e,
								selector: 'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'
							};
							a.hooks.run("before-highlightall", r), r.elements = Array.prototype.slice.apply(r.container.querySelectorAll(r.selector)), a.hooks.run("before-all-elements-highlight", r);
							for (var i, l = 0; i = r.elements[l++];) a.highlightElement(i, !0 === n, r.callback)
						},
						highlightElement: function(n, t, r) {
							var i = a.util.getLanguage(n),
								l = a.languages[i];
							a.util.setLanguage(n, i);
							var o = n.parentElement;
							o && "pre" === o.nodeName.toLowerCase() && a.util.setLanguage(o, i);
							var s = {
								element: n,
								language: i,
								grammar: l,
								code: n.textContent
							};

							function u(e) {
								s.highlightedCode = e, a.hooks.run("before-insert", s), s.element.innerHTML = s.highlightedCode, a.hooks.run("after-highlight", s), a.hooks.run("complete", s), r && r.call(s.element)
							}
							if (a.hooks.run("before-sanity-check", s), (o = s.element.parentElement) && "pre" === o.nodeName.toLowerCase() && !o.hasAttribute("tabindex") && o.setAttribute("tabindex", "0"), !s.code) return a.hooks.run("complete", s), void(r && r.call(s.element));
							if (a.hooks.run("before-highlight", s), s.grammar)
								if (t && e.Worker) {
									var c = new Worker(a.filename);
									c.onmessage = function(e) {
										u(e.data)
									}, c.postMessage(JSON.stringify({
										language: s.language,
										code: s.code,
										immediateClose: !0
									}))
								} else u(a.highlight(s.code, s.grammar, s.language));
							else u(a.util.encode(s.code))
						},
						highlight: function(e, n, t) {
							var r = {
								code: e,
								grammar: n,
								language: t
							};
							if (a.hooks.run("before-tokenize", r), !r.grammar) throw new Error('The language "' + r.language + '" has no grammar.');
							return r.tokens = a.tokenize(r.code, r.grammar), a.hooks.run("after-tokenize", r), i.stringify(a.util.encode(r.tokens), r.language)
						},
						tokenize: function(e, n) {
							var t = n.rest;
							if (t) {
								for (var r in t) n[r] = t[r];
								delete n.rest
							}
							var a = new s;
							return u(a, a.head, e), o(e, a, n, a.head, 0),
								function(e) {
									for (var n = [], t = e.head.next; t !== e.tail;) n.push(t.value), t = t.next;
									return n
								}(a)
						},
						hooks: {
							all: {},
							add: function(e, n) {
								var t = a.hooks.all;
								t[e] = t[e] || [], t[e].push(n)
							},
							run: function(e, n) {
								var t = a.hooks.all[e];
								if (t && t.length)
									for (var r, i = 0; r = t[i++];) r(n)
							}
						},
						Token: i
					};

				function i(e, n, t, r) {
					this.type = e, this.content = n, this.alias = t, this.length = 0 | (r || "").length
				}

				function l(e, n, t, r) {
					e.lastIndex = n;
					var a = e.exec(t);
					if (a && r && a[1]) {
						var i = a[1].length;
						a.index += i, a[0] = a[0].slice(i)
					}
					return a
				}

				function o(e, n, t, r, s, g) {
					for (var f in t)
						if (t.hasOwnProperty(f) && t[f]) {
							var h = t[f];
							h = Array.isArray(h) ? h : [h];
							for (var d = 0; d < h.length; ++d) {
								if (g && g.cause == f + "," + d) return;
								var v = h[d],
									p = v.inside,
									m = !!v.lookbehind,
									y = !!v.greedy,
									k = v.alias;
								if (y && !v.pattern.global) {
									var x = v.pattern.toString().match(/[imsuy]*$/)[0];
									v.pattern = RegExp(v.pattern.source, x + "g")
								}
								for (var b = v.pattern || v, w = r.next, A = s; w !== n.tail && !(g && A >= g.reach); A += w.value.length, w = w.next) {
									var E = w.value;
									if (n.length > e.length) return;
									if (!(E instanceof i)) {
										var P, L = 1;
										if (y) {
											if (!(P = l(b, A, e, m)) || P.index >= e.length) break;
											var S = P.index,
												O = P.index + P[0].length,
												j = A;
											for (j += w.value.length; S >= j;) j += (w = w.next).value.length;
											if (A = j -= w.value.length, w.value instanceof i) continue;
											for (var C = w; C !== n.tail && (j < O || "string" == typeof C.value); C = C.next) L++, j += C.value.length;
											L--, E = e.slice(A, j), P.index -= A
										} else if (!(P = l(b, 0, E, m))) continue;
										S = P.index;
										var N = P[0],
											_ = E.slice(0, S),
											M = E.slice(S + N.length),
											W = A + E.length;
										g && W > g.reach && (g.reach = W);
										var z = w.prev;
										if (_ && (z = u(n, z, _), A += _.length), c(n, z, L), w = u(n, z, new i(f, p ? a.tokenize(N, p) : N, k, N)), M && u(n, w, M), L > 1) {
											var I = {
												cause: f + "," + d,
												reach: W
											};
											o(e, n, t, w.prev, A, I), g && I.reach > g.reach && (g.reach = I.reach)
										}
									}
								}
							}
						}
				}

				function s() {
					var e = {
							value: null,
							prev: null,
							next: null
						},
						n = {
							value: null,
							prev: e,
							next: null
						};
					e.next = n, this.head = e, this.tail = n, this.length = 0
				}

				function u(e, n, t) {
					var r = n.next,
						a = {
							value: t,
							prev: n,
							next: r
						};
					return n.next = a, r.prev = a, e.length++, a
				}

				function c(e, n, t) {
					for (var r = n.next, a = 0; a < t && r !== e.tail; a++) r = r.next;
					n.next = r, r.prev = n, e.length -= a
				}
				if (e.Prism = a, i.stringify = function e(n, t) {
						if ("string" == typeof n) return n;
						if (Array.isArray(n)) {
							var r = "";
							return n.forEach((function(n) {
								r += e(n, t)
							})), r
						}
						var i = {
								type: n.type,
								content: e(n.content, t),
								tag: "span",
								classes: ["token", n.type],
								attributes: {},
								language: t
							},
							l = n.alias;
						l && (Array.isArray(l) ? Array.prototype.push.apply(i.classes, l) : i.classes.push(l)), a.hooks.run("wrap", i);
						var o = "";
						for (var s in i.attributes) o += " " + s + '="' + (i.attributes[s] || "").replace(/"/g, "&quot;") + '"';
						return "<" + i.tag + ' class="' + i.classes.join(" ") + '"' + o + ">" + i.content + "</" + i.tag + ">"
					}, !e.document) return e.addEventListener ? (a.disableWorkerMessageHandler || e.addEventListener("message", (function(n) {
					var t = JSON.parse(n.data),
						r = t.language,
						i = t.code,
						l = t.immediateClose;
					e.postMessage(a.highlight(i, a.languages[r], r)), l && e.close()
				}), !1), a) : a;
				var g = a.util.currentScript();

				function f() {
					a.manual || a.highlightAll()
				}
				if (g && (a.filename = g.src, g.hasAttribute("data-manual") && (a.manual = !0)), !a.manual) {
					var h = document.readyState;
					"loading" === h || "interactive" === h && g && g.defer ? document.addEventListener("DOMContentLoaded", f) : window.requestAnimationFrame ? window.requestAnimationFrame(f) : window.setTimeout(f, 16)
				}
				return a
			}(_self);
		"undefined" != typeof module && module.exports && (module.exports = Prism), "undefined" != typeof global && (global.Prism = Prism);
		Prism.languages.markup = {
			comment: {
				pattern: /<!--(?:(?!<!--)[\s\S])*?-->/,
				greedy: !0
			},
			prolog: {
				pattern: /<\?[\s\S]+?\?>/,
				greedy: !0
			},
			doctype: {
				pattern: /<!DOCTYPE(?:[^>"'[\]]|"[^"]*"|'[^']*')+(?:\[(?:[^<"'\]]|"[^"]*"|'[^']*'|<(?!!--)|<!--(?:[^-]|-(?!->))*-->)*\]\s*)?>/i,
				greedy: !0,
				inside: {
					"internal-subset": {
						pattern: /(^[^\[]*\[)[\s\S]+(?=\]>$)/,
						lookbehind: !0,
						greedy: !0,
						inside: null
					},
					string: {
						pattern: /"[^"]*"|'[^']*'/,
						greedy: !0
					},
					punctuation: /^<!|>$|[[\]]/,
					"doctype-tag": /^DOCTYPE/i,
					name: /[^\s<>'"]+/
				}
			},
			cdata: {
				pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i,
				greedy: !0
			},
			tag: {
				pattern: /<\/?(?!\d)[^\s>\/=$<%]+(?:\s(?:\s*[^\s>\/=]+(?:\s*=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+(?=[\s>]))|(?=[\s/>])))+)?\s*\/?>/,
				greedy: !0,
				inside: {
					tag: {
						pattern: /^<\/?[^\s>\/]+/,
						inside: {
							punctuation: /^<\/?/,
							namespace: /^[^\s>\/:]+:/
						}
					},
					"special-attr": [],
					"attr-value": {
						pattern: /=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+)/,
						inside: {
							punctuation: [{
								pattern: /^=/,
								alias: "attr-equals"
							}, {
								pattern: /^(\s*)["']|["']$/,
								lookbehind: !0
							}]
						}
					},
					punctuation: /\/?>/,
					"attr-name": {
						pattern: /[^\s>\/]+/,
						inside: {
							namespace: /^[^\s>\/:]+:/
						}
					}
				}
			},
			entity: [{
				pattern: /&[\da-z]{1,8};/i,
				alias: "named-entity"
			}, /&#x?[\da-f]{1,8};/i]
		}, Prism.languages.markup.tag.inside["attr-value"].inside.entity = Prism.languages.markup.entity, Prism.languages.markup.doctype.inside["internal-subset"].inside = Prism.languages.markup, Prism.hooks.add("wrap", (function(a) {
			"entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"))
		})), Object.defineProperty(Prism.languages.markup.tag, "addInlined", {
			value: function(a, e) {
				var s = {};
				s["language-" + e] = {
					pattern: /(^<!\[CDATA\[)[\s\S]+?(?=\]\]>$)/i,
					lookbehind: !0,
					inside: Prism.languages[e]
				}, s.cdata = /^<!\[CDATA\[|\]\]>$/i;
				var t = {
					"included-cdata": {
						pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i,
						inside: s
					}
				};
				t["language-" + e] = {
					pattern: /[\s\S]+/,
					inside: Prism.languages[e]
				};
				var n = {};
				n[a] = {
					pattern: RegExp("(<__[^>]*>)(?:<!\\[CDATA\\[(?:[^\\]]|\\](?!\\]>))*\\]\\]>|(?!<!\\[CDATA\\[)[^])*?(?=</__>)".replace(/__/g, (function() {
						return a
					})), "i"),
					lookbehind: !0,
					greedy: !0,
					inside: t
				}, Prism.languages.insertBefore("markup", "cdata", n)
			}
		}), Object.defineProperty(Prism.languages.markup.tag, "addAttribute", {
			value: function(a, e) {
				Prism.languages.markup.tag.inside["special-attr"].push({
					pattern: RegExp("(^|[\"'\\s])(?:" + a + ")\\s*=\\s*(?:\"[^\"]*\"|'[^']*'|[^\\s'\">=]+(?=[\\s>]))", "i"),
					lookbehind: !0,
					inside: {
						"attr-name": /^[^\s=]+/,
						"attr-value": {
							pattern: /=[\s\S]+/,
							inside: {
								value: {
									pattern: /(^=\s*(["']|(?!["'])))\S[\s\S]*(?=\2$)/,
									lookbehind: !0,
									alias: [e, "language-" + e],
									inside: Prism.languages[e]
								},
								punctuation: [{
									pattern: /^=/,
									alias: "attr-equals"
								}, /"|'/]
							}
						}
					}
				})
			}
		}), Prism.languages.html = Prism.languages.markup, Prism.languages.mathml = Prism.languages.markup, Prism.languages.svg = Prism.languages.markup, Prism.languages.xml = Prism.languages.extend("markup", {}), Prism.languages.ssml = Prism.languages.xml, Prism.languages.atom = Prism.languages.xml, Prism.languages.rss = Prism.languages.xml;
		! function(s) {
			var e = /(?:"(?:\\(?:\r\n|[\s\S])|[^"\\\r\n])*"|'(?:\\(?:\r\n|[\s\S])|[^'\\\r\n])*')/;
			s.languages.css = {
				comment: /\/\*[\s\S]*?\*\//,
				atrule: {
					pattern: RegExp("@[\\w-](?:[^;{\\s\"']|\\s+(?!\\s)|" + e.source + ")*?(?:;|(?=\\s*\\{))"),
					inside: {
						rule: /^@[\w-]+/,
						"selector-function-argument": {
							pattern: /(\bselector\s*\(\s*(?![\s)]))(?:[^()\s]|\s+(?![\s)])|\((?:[^()]|\([^()]*\))*\))+(?=\s*\))/,
							lookbehind: !0,
							alias: "selector"
						},
						keyword: {
							pattern: /(^|[^\w-])(?:and|not|only|or)(?![\w-])/,
							lookbehind: !0
						}
					}
				},
				url: {
					pattern: RegExp("\\burl\\((?:" + e.source + "|(?:[^\\\\\r\n()\"']|\\\\[^])*)\\)", "i"),
					greedy: !0,
					inside: {
						function: /^url/i,
						punctuation: /^\(|\)$/,
						string: {
							pattern: RegExp("^" + e.source + "$"),
							alias: "url"
						}
					}
				},
				selector: {
					pattern: RegExp("(^|[{}\\s])[^{}\\s](?:[^{};\"'\\s]|\\s+(?![\\s{])|" + e.source + ")*(?=\\s*\\{)"),
					lookbehind: !0
				},
				string: {
					pattern: e,
					greedy: !0
				},
				property: {
					pattern: /(^|[^-\w\xA0-\uFFFF])(?!\s)[-_a-z\xA0-\uFFFF](?:(?!\s)[-\w\xA0-\uFFFF])*(?=\s*:)/i,
					lookbehind: !0
				},
				important: /!important\b/i,
				function: {
					pattern: /(^|[^-a-z0-9])[-a-z0-9]+(?=\()/i,
					lookbehind: !0
				},
				punctuation: /[(){};:,]/
			}, s.languages.css.atrule.inside.rest = s.languages.css;
			var t = s.languages.markup;
			t && (t.tag.addInlined("style", "css"), t.tag.addAttribute("style", "css"))
		}(Prism);
		Prism.languages.clike = {
			comment: [{
				pattern: /(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/,
				lookbehind: !0,
				greedy: !0
			}, {
				pattern: /(^|[^\\:])\/\/.*/,
				lookbehind: !0,
				greedy: !0
			}],
			string: {
				pattern: /(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,
				greedy: !0
			},
			"class-name": {
				pattern: /(\b(?:class|extends|implements|instanceof|interface|new|trait)\s+|\bcatch\s+\()[\w.\\]+/i,
				lookbehind: !0,
				inside: {
					punctuation: /[.\\]/
				}
			},
			keyword: /\b(?:break|catch|continue|do|else|finally|for|function|if|in|instanceof|new|null|return|throw|try|while)\b/,
			boolean: /\b(?:false|true)\b/,
			function: /\b\w+(?=\()/,
			number: /\b0x[\da-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
			operator: /[<>]=?|[!=]=?=?|--?|\+\+?|&&?|\|\|?|[?*/~^%]/,
			punctuation: /[{}[\];(),.:]/
		};
		Prism.languages.javascript = Prism.languages.extend("clike", {
			"class-name": [Prism.languages.clike["class-name"], {
				pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$A-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\.(?:constructor|prototype))/,
				lookbehind: !0
			}],
			keyword: [{
				pattern: /((?:^|\})\s*)catch\b/,
				lookbehind: !0
			}, {
				pattern: /(^|[^.]|\.\.\.\s*)\b(?:as|assert(?=\s*\{)|async(?=\s*(?:function\b|\(|[$\w\xA0-\uFFFF]|$))|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally(?=\s*(?:\{|$))|for|from(?=\s*(?:['"]|$))|function|(?:get|set)(?=\s*(?:[#\[$\w\xA0-\uFFFF]|$))|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)\b/,
				lookbehind: !0
			}],
			function: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*(?:\.\s*(?:apply|bind|call)\s*)?\()/,
			number: {
				pattern: RegExp("(^|[^\\w$])(?:NaN|Infinity|0[bB][01]+(?:_[01]+)*n?|0[oO][0-7]+(?:_[0-7]+)*n?|0[xX][\\dA-Fa-f]+(?:_[\\dA-Fa-f]+)*n?|\\d+(?:_\\d+)*n|(?:\\d+(?:_\\d+)*(?:\\.(?:\\d+(?:_\\d+)*)?)?|\\.\\d+(?:_\\d+)*)(?:[Ee][+-]?\\d+(?:_\\d+)*)?)(?![\\w$])"),
				lookbehind: !0
			},
			operator: /--|\+\+|\*\*=?|=>|&&=?|\|\|=?|[!=]==|<<=?|>>>?=?|[-+*/%&|^!=<>]=?|\.{3}|\?\?=?|\?\.?|[~:]/
		}), Prism.languages.javascript["class-name"][0].pattern = /(\b(?:class|extends|implements|instanceof|interface|new)\s+)[\w.\\]+/, Prism.languages.insertBefore("javascript", "keyword", {
			regex: {
				pattern: RegExp("((?:^|[^$\\w\\xA0-\\uFFFF.\"'\\])\\s]|\\b(?:return|yield))\\s*)/(?:(?:\\[(?:[^\\]\\\\\r\n]|\\\\.)*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}|(?:\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.)*\\])*\\])*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}v[dgimyus]{0,7})(?=(?:\\s|/\\*(?:[^*]|\\*(?!/))*\\*/)*(?:$|[\r\n,.;:})\\]]|//))"),
				lookbehind: !0,
				greedy: !0,
				inside: {
					"regex-source": {
						pattern: /^(\/)[\s\S]+(?=\/[a-z]*$)/,
						lookbehind: !0,
						alias: "language-regex",
						inside: Prism.languages.regex
					},
					"regex-delimiter": /^\/|\/$/,
					"regex-flags": /^[a-z]+$/
				}
			},
			"function-variable": {
				pattern: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*[=:]\s*(?:async\s*)?(?:\bfunction\b|(?:\((?:[^()]|\([^()]*\))*\)|(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)\s*=>))/,
				alias: "function"
			},
			parameter: [{
				pattern: /(function(?:\s+(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)?\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\))/,
				lookbehind: !0,
				inside: Prism.languages.javascript
			}, {
				pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$a-z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*=>)/i,
				lookbehind: !0,
				inside: Prism.languages.javascript
			}, {
				pattern: /(\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*=>)/,
				lookbehind: !0,
				inside: Prism.languages.javascript
			}, {
				pattern: /((?:\b|\s|^)(?!(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)(?![$\w\xA0-\uFFFF]))(?:(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*\s*)\(\s*|\]\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*\{)/,
				lookbehind: !0,
				inside: Prism.languages.javascript
			}],
			constant: /\b[A-Z](?:[A-Z_]|\dx?)*\b/
		}), Prism.languages.insertBefore("javascript", "string", {
			hashbang: {
				pattern: /^#!.*/,
				greedy: !0,
				alias: "comment"
			},
			"template-string": {
				pattern: /`(?:\\[\s\S]|\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}|(?!\$\{)[^\\`])*`/,
				greedy: !0,
				inside: {
					"template-punctuation": {
						pattern: /^`|`$/,
						alias: "string"
					},
					interpolation: {
						pattern: /((?:^|[^\\])(?:\\{2})*)\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}/,
						lookbehind: !0,
						inside: {
							"interpolation-punctuation": {
								pattern: /^\$\{|\}$/,
								alias: "punctuation"
							},
							rest: Prism.languages.javascript
						}
					},
					string: /[\s\S]+/
				}
			},
			"string-property": {
				pattern: /((?:^|[,{])[ \t]*)(["'])(?:\\(?:\r\n|[\s\S])|(?!\2)[^\\\r\n])*\2(?=\s*:)/m,
				lookbehind: !0,
				greedy: !0,
				alias: "property"
			}
		}), Prism.languages.insertBefore("javascript", "operator", {
			"literal-property": {
				pattern: /((?:^|[,{])[ \t]*)(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*:)/m,
				lookbehind: !0,
				alias: "property"
			}
		}), Prism.languages.markup && (Prism.languages.markup.tag.addInlined("script", "javascript"), Prism.languages.markup.tag.addAttribute("on(?:abort|blur|change|click|composition(?:end|start|update)|dblclick|error|focus(?:in|out)?|key(?:down|up)|load|mouse(?:down|enter|leave|move|out|over|up)|reset|resize|scroll|select|slotchange|submit|unload|wheel)", "javascript")), Prism.languages.js = Prism.languages.javascript;
	</script>
	<style>
		/* PrismJS 1.29.0
https://prismjs.com/download.html#themes=prism-tomorrow&languages=markup+css+clike+javascript */
		code[class*=language-],
		pre[class*=language-] {
			color: #ccc;
			background: 0 0;
			font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
			font-size: 1em;
			text-align: left;
			white-space: pre;
			word-spacing: normal;
			word-break: normal;
			word-wrap: normal;
			line-height: 1.5;
			-moz-tab-size: 4;
			-o-tab-size: 4;
			tab-size: 4;
			-webkit-hyphens: none;
			-moz-hyphens: none;
			-ms-hyphens: none;
			hyphens: none
		}

		pre[class*=language-] {
			padding: 1em;
			margin: .5em 0;
			overflow: auto
		}

		:not(pre)>code[class*=language-],
		pre[class*=language-] {
			background: #2d2d2d
		}

		:not(pre)>code[class*=language-] {
			padding: .1em;
			border-radius: .3em;
			white-space: normal
		}

		.token.block-comment,
		.token.cdata,
		.token.comment,
		.token.doctype,
		.token.prolog {
			color: #999
		}

		.token.punctuation {
			color: #ccc
		}

		.token.attr-name,
		.token.deleted,
		.token.namespace,
		.token.tag {
			color: #e2777a
		}

		.token.function-name {
			color: #6196cc
		}

		.token.boolean,
		.token.function,
		.token.number {
			color: #f08d49
		}

		.token.class-name,
		.token.constant,
		.token.property,
		.token.symbol {
			color: #f8c555
		}

		.token.atrule,
		.token.builtin,
		.token.important,
		.token.keyword,
		.token.selector {
			color: #cc99cd
		}

		.token.attr-value,
		.token.char,
		.token.regex,
		.token.string,
		.token.variable {
			color: #7ec699
		}

		.token.entity,
		.token.operator,
		.token.url {
			color: #67cdcc
		}

		.token.bold,
		.token.important {
			font-weight: 700
		}

		.token.italic {
			font-style: italic
		}

		.token.entity {
			cursor: help
		}

		.token.inserted {
			color: green
		}
	</style>

	<title>Website</title>
</head>
</body>

<body class="lg:px-20 md:px-10 2xl:px-30">
	<div class="bg-white items-center px-10">

		<nav class="pt-10 bg-white md:flex md:items-center md:justify-between">
			<div class="flex justify-between items-center ">
				<span class="text-2xl  cursor-pointer">
					<img src="http://localhost/ci/assets/logo2.png" class="h-12 items-center" />
				</span>

				<span class="text-3xl cursor-pointer mx-2 md:hidden block">
					<ion-icon name="menu" onclick="Menu(this)"></ion-icon>
				</span>
			</div>

			<ul class="md:flex md:items-center md:text-sm xl:text-base md:bg-white 2xl:text-lg md:text-black md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 xs:bg-black xs:text-white">
				<li class="mx-4 my-6 md:my-0">
					<a href="#" class=" duration-500">Product</a>
				</li>
				<li class="mx-4 my-6 md:my-0">
					<a href="http://localhost/ci/index.php/facebook/page1" class=" duration-500">Try Demo</a>
				</li>
				<li class="mx-4 my-6 md:my-0">
					<a href="http://localhost/ci/index.php/facebook/page2" class=" duration-500">Pricing</a>
				</li>
				<li class="mx-4 my-6 md:my-0">
					<a href="http://localhost/ci/index.php/facebook/page3" class="  duration-500">API Doc</a>
				</li>
				<li class="mx-4 my-6 md:my-0">
					<a href="#" class=" duration-500">Login</a>
				</li>

				<button style="background: #8460E5;" class="bg-purple-500 font-bold rounded-full text-white  duration-500 px-6 py-2 mx-4">
					Join Now
				</button>
			</ul>
		</nav>


		<script>
			function Menu(e) {
				let list = document.querySelector('ul');
				e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
			}
		</script>



		<div class="grid md:grid-cols-2 2xl:pb-20  2xl:pt-20 space-x-8 ">

			<div>
				<div class="text-8xl xs:text-5xl pt-12 font-bold "><span style="background: #8460E5;" class="bg-purple-500 text-white">SERP</span> API</div><br>
				<p class="py-3 2xl:w-full xl:w-2/3 md:w-1/9 xs:text-justify">Everything that you needs To build you own SEO tool.Only SERPHouse returns accurate structured data from any Google location worldwide, on any device and for multiple search types. </p><br>
				<p> <img src="http://localhost/ci/assets/person2.png" class="inline w-5"> 9K+ users joined us last month</p><br>
				<p> Excellent<img src="http://localhost/ci/assets/star.png" class="inline w-16"> (Based on Trustpilot and Capterra reviews)</p>
			</div>
			<div class=" xl:w-96  2xl:w-full 2xl:py-8 2xl:pl-12 lg:w-full lg:py-10 md:py-40 xs:pt-10 sm:pt-20">
				<img src="http://localhost/ci/assets/2.png" class="xs-[h-71vh]" alt="">
			</div>
		</div>

		<div class="xl:grid md:grid grid-cols-3 xl:pt-16:space-x-3  md:space-x-6 w-1/9 bg-white  ">

			<div class="bg-white 2xl:px-1 xs:pt-10 xs:py-0 md:py-10  py-24 rounded-lg ">
				<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%);  background: #FFFFFF; " class="p-6 shadow-2xl  lg:p-12 md:p-11 xl:w-10/12 border-4 rounded-3xl text-center xl:py-16 xl:h-full md:w-18 ">
					<img src="http://localhost/ci/assets/top1.png" class="w-16 mx-auto"><br>
					<span class=" font-bold text-2xl">Simple Pricing</span><br><span>Our APIs are built to fuel any apps or seo-softwares and are priced for scale.</span>
				</div>
			</div>


			<div class="bg-white md:py-10 py-24 rounded-lg ">
				<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%);  background: #FFFFFF; " class="p-6   lg:p-9  shadow-2xl  xl:w-10/12 border-4 rounded-3xl text-center xl:py-16 xl:h-full md:w-18 ">
					<img src="http://localhost/ci/assets/top2.png" class="w-16 mx-auto"><br>
					<span class=" font-bold text-2xl">Scalable & Queueless</span><br><span>
						Cloud infrastructure is built to withstand high volume API requests without the need of a queue.</span>
				</div>
			</div>

			<div class="bg-white xs:py-0 md:py-10 py-24 rounded-lg ">
				<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%); background: #FFFFFF;" class="p-6  md:p-9 lg:p-11  shadow-2xl xl:w-10/12  border-4 rounded-3xl text-center xl:py-16 xl:h-full md:w-18 ">
					<img src="http://localhost/ci/assets/top3.png" class="w-16 mx-auto"><br>
					<span class=" font-bold text-2xl">
						Detailed API docs</span><br><span>We have a detailed documentation, where you can find all you needed.</span>
				</div>
			</div>

		</div>


		<div class="flex flex-col pt-12">
			<div class="sm:mx-auto">
				<p style="color: #8460E5;" class="font-bold text-center  sm:text-4xl">All the data you need, under one roof</p><span style="color: #8460E5;" class="text-purple-600  text-2xl ml-56 md:ml-64 xs:mx-14 sm:mx-56">___________</span>
			</div>
			<p class="text-center xl:w-1/4 mx-auto 2xl:w-1/2 md:w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, enim? Saepe sapiente dolor, placeat qui.</p>
		</div>


		<div class="grid md:grid-cols-2 xs:pt-10 pt-32 bg-white">
			<div class="items-center md:flex ">
				<img src="http://localhost/ci/assets/google.png" class="" alt="">
			</div>
			<div class="space-y-3 sm:pt-10 xl:px-20">
				<span class="font-bold text-3xl">Google
					<br>Search Api</span>
				<p class="xs:text-justify  2xl:w-2/3">Most popular search engine. You can automate your searching needs over Google web, image and new result. Simply integrate our REST API to get the data in structured JSON.</p>
				<button style="background: #8460E5;" class="bg-purple-600 cursor-pointer text-white font-bold text-sm items-center px-3 py-2 rounded-2xl ">Learn More</button>
			</div>
		</div>


		<div class="grid md:grid-cols-2 pt-16  ">
			<div class="space-y-3 xl:pl-16 py-16  xl:pr-32">
				<span class="font-bold text-3xl  ">Bing
					<br>Search Api</span>
				<p class="xs:text-justify 2xl:w-2/3">Convert Bing result into the actionable data insights. Our REST API provide you the real time accurate data without any headache. You can target your desired location and rest of we will take care.</p>
				<button style="background: #8460E5;" class="bg-purple-600 text-white font-bold text-sm items-center px-3 py-2 rounded-2xl ">Learn More</button>
			</div>
			<div class="xl:items-center  xl:-m-24 ">
				<img src="http://localhost/ci/assets/under.png" class=" md:py-20 lg:py-16 2xl:pl-24 xl:pl-16" alt="">
			</div>
		</div>



		<div class="grid md:grid-cols-2 pt-16 bg-white">
			<div class="items-center md:flex ">
				<img src="http://localhost/ci/assets/last.png" class="" alt="">
			</div>
			<div class="space-y-3  2xl:px-20">
				<span class="font-bold text-3xl  ">Yahoo
					<br>Search Api</span>
				<p class="xl:w-10/12 xs:text-justify 2xl:w-2/3 ">We have covered all of your Top requirement. Yes, Yahoo SERP Data is also available. We offer Web, News and Image API here. You can integrate our JSON API to automate your work.</p>
				<button style="background: #8460E5;" class="bg-purple-600 text-white font-bold text-sm items-center px-3 py-2 rounded-2xl ">Learn More</button>
			</div>
		</div>


		<div class="sm:grid md:grid-cols-3 xs:pt-10 2xl:pt-40  pt-32">

			<div class="bg-white">
				<div class="p-6">
					<img src="http://localhost/ci/assets/11.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
					<p class="xl:text-left font-bold xs:text-center ">Realtime Result</p><br>
					<p class="xl:text-left  xs:text-center">
						We sends ping to url that provided by user once the search is completed. Postback includes result data. While pingback just calls that url with task id.</p>
				</div>
			</div>

			<div class="bg-white">
				<div class="p-6">
					<img src="http://localhost/ci/assets/12.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
					<p class=" xl:text-left  font-bold xs:text-center  ">Built for volume</p><br>
					<p class=" xl:text-left xs:text-center ">
						Regular organic results are available as well as Maps, Related Search, People also ask, Answer box, People also serch for and Knowledge Graph.</p>
				</div>
			</div>

			<div class="bg-white">
				<div class="p-6">
					<img src="http://localhost/ci/assets/13.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
					<p class="xl:text-left  font-bold xs:text-center ">Location Accuracy</p><br>
					<p class=" xl:text-left xs:text-center ">
						We sends ping to url that provided by user once the search is completed. Postback includes result data. While pingback just calls that url with task id.</p>
				</div>
			</div>

		</div>



		<div class="sm:grid md:grid-cols-3 ">

			<div class="">
				<div class="bg-white">
					<div class="p-6">
						<img src="http://localhost/ci/assets/14.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
						<p class="xl:text-left   font-bold xs:text-center  ">Speed</p><br>
						<p class="xl:text-left   xs:text-center ">
							Each API request runs immediately – no waiting for results. It will take up to 5 seconds to return the result.</p>
					</div>
				</div>
			</div>

			<div class="">
				<div class="bg-white">
					<div class="p-6">
						<img src="http://localhost/ci/assets/15.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
						<p class="xl:text-left   font-bold xs:text-center ">Pay on Success</p><br>
						<p class="xl:text-left   xs:text-center ">
							In addition, each API request runs in a full browser, and we'll even solve all CAPTCHAs. Mimicking completely what a human will do. This guarantees that you get what users truly see.</p>
					</div>
				</div>
			</div>

			<div class="">
				<div class="bg-white">
					<div class="p-6">
						<img src="http://localhost/ci/assets/16.png" class="xl:mx-0 md:w-2/3 2xl:w-1/4 xl:w-1/4 lg:w-1/3 sm:w-1/4 xs:w-2/3 w-16 pb-4 xs:mx-auto">
						<p class="xl:text-left   font-bold xs:text-center ">HTML & JSON Data</p><br>
						<p class="xl:text-left  xs:text-center ">
							Regular organic results are available as well as Maps, Related Search, People also ask, Answer box, People also serch for and Knowledge Graph.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="flex flex-col xs:pt-10  xs:pb-12 2xl:pt-40 pt-32 pb-32">
			<div class="mx-auto">
				<p style="color: #8460E5;" class="font-bold text-center text-purple-600 text-4xl">API Playground</p><span style="color: #8460E5;" class="text-purple-600  text-2xl xs:pt-4 m-16">___________</span>
			</div>
			<p class="text-center 2xl:pt-5 xl:w-1/4 mx-auto">SERPHouse effortlessly powers your SEO apps and services.
				Try our complete and easy to use API</p>
		</div>

		<div class="sm:border-4 rounded-3xl">
			<div class="grid lg:grid-cols-3 ">
				<div class="lg:h-[120vh] xl:h-[107vh] 2xl:h-[102vh]">

					<div>
						<div class="grid grid-cols-1 lg:-m-1 sm:mx-40">
							<div class=" xs:space-y-6 sm:space-y-4 2xl:space-y-6 xl:px-8 lg:px-2  md:space-y-3 md:py-2  lg:space-y-8 xl:space-y-3 2xl:pl-24">

								<div class="bg-white xs:space-x-9 ">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none xl:p-6 2xl:p-4 sm:w-64 sm:p-3 xs:text-center sm:text-center" placeholder="Search Query">
								</div>


								<div class="bg-white">
									<input class="placeholder-black border-2 rounded-full focus:border-purple-600  focus:outline-none xs:text-center 2xl:p-4  xl:p-6  sm:text-center sm:w-64 sm:p-3" placeholder="Domain">

								</div>


								<div class="bg-white">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none xs:text-center xl:p-6 2xl:p-4  sm:p-3 sm:w-64 sm:text-center" placeholder="Serp Type">
								</div>

								<div class="bg-white">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none  xs:text-center xl:p-6 2xl:p-4  sm:p-3 sm:text-center sm:w-64" placeholder="Location">
								</div>
								<div class="bg-white">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none   xl:p-6 xs:text-center 2xl:p-4  sm:p-3 sm:text-center sm:w-64" placeholder="Language">

								</div>
								<div class="bg-white">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none  xs:text-center xl:p-6 2xl:p-4  sm:p-3 sm:text-center sm:w-64" placeholder="Page">
								</div>
								<div class="bg-white">
									<input class="placeholder-black border-2  rounded-full focus:border-purple-600  focus:outline-none  xs:text-center xl:p-6 2xl:p-4  sm:w-64 sm:text-center sm:p-3" placeholder="Desktop">
								</div>


								<style>
									.tab-btn.active {
										background-color: #8460E5;
										color: #FFFFFF;
									}
								</style>

								<div class="flex group-1  justify-between md:p-6 xs:text-center 2xl:p-4  rounded-full border-2  sm:w-64 sm:text-center sm:p-3 xl:p-6 ">
									<span>Verbatim</span>
									<div class="space-x-5 sm:inline-flex">
										<button class=" tab-btn active active:bg-purple-600  focus:outline-none  cursor-pointer px-3 text-black rounded-full ho">Yes</button>
										<button class=" tab-btn focus:outline-none  cursor-pointer px-3  text-black  rounded-full">No</button>
									</div>
								</div>

								<script>
									var tabLink = document.querySelectorAll(".group-1 button")

									tabLink.forEach(function(item) {
										item.addEventListener(
											"click",
											function(e) {
												tabLink.forEach(function(item) {
													item.classList.remove("active");
												});
												item.classList.add("active");

												console.log(e.target);
											},
											false
										);
									});
								</script>
								<div class="bg-white">

									<button class="placeholder-white text-white border-2 2xl:p-4  xs:text-center cursor-pointer sm:w-64 sm:p-3  bg-purple-500 xs:px-20  text-center font-bold rounded-full hover:rounded-lg  text-2xl  xl:p-6 " placeholder="Search" style="    background: #8460E5;">Search</button>

								</div>

							</div>
						</div>

					</div>


				</div>
				<iframe src="https://wp.serphouse.com/data/hosting.html" class="w-full 2xl:pt-0 xs:pt-10 lg:pt-0 xl:h-[107vh] lg:h-[120vh] 2xl:h-[102vh] xs:h-[94vh] xs:pb-4" title="Iframe Example"></iframe>
				<div class="overflow-scroll w-full rounded-r-3xl 2xl:h-[102vh] lg:h-[120vh] xs:h-[94vh]  xl:h-[107vh]">
					<div id="textToCopy1">
						<div class="copy-text1">
							<div class="bg-white w-auto ">
								<div class="tab-pane fade show  active" id="curl" role="tabpanel" aria-labelledby="curl-tab">
									<pre class="language-bash relative" id="curlsourcecode">
				<button class="absolute top-3 right-3" style="top:20px;right:20px" id="copyButton1"><i class="fa fa-clone"></i></button><span id="copyResult1"></span>
     				<code class="language-css">
			{
  "search_metadata": {
    "id": null,
    "status": "success",
    "created_at": null,
    "processed_at": "2023-01-04 09:56:31"
  },
  "search_parameters": {
    "domain": "google.com",
    "lang": "en",
    "country": "US",
    "location": "Abernathy,Texas,United States",
    "q": "Hosting",
    "device": "desktop",
    "url": "https://www.google.com/search?q=Hosting&uule=w+CAIQICIdQWJlcm5hdGh5LFRleGFzLFVuaXRlZCBTdGF0ZXM=&hl=en&gl=US&num=100&ie=UTF-8&tbs=li:1",
    "page": "1",
    "num": 100,
    "ie": "UTF-8",
    "tbs": "li:1"
  },
  "results": {
    "search_information": [
      {
        "total_results": "697,000,000",
        "time_taken_displayed": "0.57"
      }
    ],
    "ads": [
      {
        "position": 1,
        "block_position": "top",
        "title": "Sign Up Today - Get 4 Months Free - Powerful WP Hosting",
        "link": "https://getflywheel.com/",
        "displayed_link": "https://www.getflywheel.com/4-months/free",
        "description": "Sign Up Today - Get 4 Months Free - Powerful WP Hosting "
      },
      {
        "position": 2,
        "block_position": "top",
        "title": "GoDaddy Website Hosting - Includes Free Domain and SSL",
        "link": "https://www.godaddy.com/offers/pro/web-hosting",
        "displayed_link": "https://www.godaddy.com/",
        "description": "GoDaddy Website Hosting - Includes Free Domain and SSL "
      },
      {
        "position": 3,
        "block_position": "top",
        "title": "Online Web Hosting - WordPress.com (Official Site)",
        "link": "https://wordpress.com/hosting/",
        "displayed_link": "https://www.wordpress.com/",
        "description": "Online Web Hosting - WordPress.com (Official Site) "
      },
      {
        "position": 4,
        "block_position": "bottom",
        "title": "Web Hosting on IBM® Cloud - IBM® Web Hosting Services",
        "link": "https://www.ibm.com/cloud/hosting/web-hosting",
        "displayed_link": "https://www.ibm.com/web/hosting",
        "description": "Web Hosting on IBM® Cloud - IBM® Web Hosting Services "
      }
    ],
    "inline_videos": [
      {
        "title": "What Is Web Hosting? Explained YouTube ·  Pickaweb.co.uk  4 minutes, 36 secondsJun 29, 2017 ",
        "source": "YouTube",
        "channel": " ·  Pickaweb.co.uk",
        "url": "#fpstate=ive&vld=cid:f9273cb4,vid:htbY9-yggB0"
      },
      {
        "title": "Techno Tim HomeLab Services Tour (Late 2022) - What am I ... YouTube ·  Techno Tim  38 minutes, 52 seconds3 days ago ",
        "source": "YouTube",
        "channel": " ·  Techno Tim",
        "url": "#fpstate=ive&vld=cid:86a4cd6b,vid:yrMRZVvkxeA"
      },
      {
        "title": "Jetpack VideoPress: The Finest WordPress Video Hosting ... Jetpack ·  Jetpack.com  2 minutes, 29 secondsMar 17, 2016 ",
        "source": "Jetpack",
        "channel": " ·  Jetpack.com",
        "url": "https://jetpack.com/videopress/"
      }
    ],
    "organic": [
      {
        "position": 1,
        "title": "Web Hosting | With 1-Click Installer, 24/7 Support, and More",
        "link": "https://www.hostinger.com/web-hosting",
        "displayed_link": "https://www.hostinger.com › web-hosting ",
        "cached_page": "",
        "snippet": "Hostinger provides easy-to-use, fast, and secure web hosting services. Experience the best website hosting technology and get your site online today."
      },
      {
        "position": 2,
        "title": "Web Hosting That Fit Your Needs - Namecheap",
        "link": "https://www.namecheap.com/hosting/",
        "displayed_link": "https://www.namecheap.com › hosting ",
        "cached_page": "",
        "snippet": "Get cheap web hosting services with Namecheap! Do you run a professional business or a personal WordPress website? Get 24/7 support, FREE Whois ..."
      },
      {
        "position": 3,
        "title": "SiteGround: Web Hosting Services Crafted with Care",
        "link": "https://www.siteground.com/",
        "displayed_link": "https://www.siteground.com",
        "cached_page": "",
        "snippet": "Our web hosting is trusted by more than 2800000 domains for its top speed, unmatched security, 24/7 fast, and expert support! Get started now!",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.siteground.com/web-hosting.htm",
              "title": "Web Hosting"
            },
            {
              "link": "https://www.siteground.com/company",
              "title": "Company"
            },
            {
              "link": "https://www.siteground.com/cloud-hosting.htm",
              "title": "Cloud Hosting"
            },
            {
              "link": "https://www.siteground.com/reseller_hosting.htm",
              "title": "Reseller Hosting"
            }
          ]
        }
      },
      {
        "position": 4,
        "title": "Bluehost.com: Best Web Hosting - Domains - WordPress - 2022",
        "link": "https://www.bluehost.com/",
        "displayed_link": "https://www.bluehost.com",
        "cached_page": "",
        "snippet": "Bluehost is one of the largest website hosting providers and powers millions of websites. Learn more about our secure and reliable hosting services today!",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.bluehost.com/hosting",
              "title": "Hosting"
            },
            {
              "link": "https://www.bluehost.com/domains",
              "title": "Domains"
            },
            {
              "link": "https://www.bluehost.com/wordpress",
              "title": "WordPress"
            },
            {
              "link": "https://www.bluehost.com/solutions/full-service",
              "title": "Professional Services"
            }
          ]
        }
      },
      {
        "position": 5,
        "title": "HostGator: Web Hosting - 2022's Best Website Hosting",
        "link": "https://www.hostgator.com/",
        "displayed_link": "https://www.hostgator.com",
        "cached_page": "",
        "snippet": "Web hosting that scales from easy to expert. A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress installs, and a",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.hostgator.com/web-hosting",
              "title": "Hosting"
            },
            {
              "link": "https://www.hostgator.com/domains",
              "title": "Domains"
            },
            {
              "link": "https://www.hostgator.com/dedicated-server",
              "title": "PRO Hosting"
            },
            {
              "link": "https://www.hostgator.com/help",
              "title": "Resources"
            }
          ]
        }
      },
      {
        "position": 6,
        "title": "Hosting | Secure, Fast and Reliable Solutions - GoDaddy",
        "link": "https://www.godaddy.com/hosting",
        "displayed_link": "https://www.godaddy.com › hosting ",
        "cached_page": "",
        "snippet": "GoDaddy hosting solutions are built for speed, reliability and security. Select the best domain hosting plan for you from Shared, WordPress, VPS Hosting and ..."
      },
      {
        "position": 7,
        "title": "WordPress Hosting, Perfected. | WP Engine®",
        "link": "https://wpengine.com/",
        "displayed_link": "https://wpengine.com",
        "cached_page": "",
        "snippet": "WP Engine provides the fastest, most reliable WordPress hosting for 1.5M+ websites. Get 24/7 support, best-in-class security, and market-leading ..."
      },
      {
        "position": 8,
        "title": "Web Hosting: Secure, Fast, & Reliable | InMotion Hosting",
        "link": "https://www.inmotionhosting.com/",
        "displayed_link": "https://www.inmotionhosting.com",
        "cached_page": "",
        "snippet": "Premium Web Hosting on Linux Servers with 99.99% Uptime. Domains, Email & WordPress Solutions with 24x7 Customer Support & Money-Back Guarantee."
      },
      {
        "position": 9,
        "title": "Hosting - definition of Hosting by The Free Dictionary",
        "link": "https://www.thefreedictionary.com/Hosting",
        "displayed_link": "https://www.thefreedictionary.com › Hosting ",
        "cached_page": "",
        "snippet": "Define Hosting. Hosting synonyms, Hosting pronunciation, Hosting translation, English dictionary definition of Hosting. n. 1. One who receives or entertains ..."
      },
      {
        "position": 10,
        "title": "Google Cloud web hosting",
        "link": "https://cloud.google.com/solutions/web-hosting",
        "displayed_link": "https://cloud.google.com › solutions › web-hosting ",
        "cached_page": "",
        "snippet": "Web hosting services from Google Cloud. Host everything from blogs to dynamic websites in the cloud with Click to Deploy or customized solutions."
      },
      {
        "position": 11,
        "title": "Hosting - Wikipedia",
        "link": "https://en.wikipedia.org/wiki/Hosting",
        "displayed_link": "https://en.wikipedia.org › wiki › Hosting ",
        "cached_page": "",
        "snippet": "Hosting may refer to: To act as the organizer or master of ceremonies for an event; Self-hosting (compilers), software distribution which provides all ..."
      },
      {
        "position": 12,
        "title": "Wordpress Hosting | Fast and Secure WP Web Hosting",
        "link": "https://www.domain.com/wordpress-hosting",
        "displayed_link": "https://www.domain.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Bring your wordpress website to the next level with fast, secure and reliable hosting. Upgrade your hosting with Domain.com!"
      },
      {
        "position": 13,
        "title": "Fast and secure web hosting - Firebase",
        "link": "https://firebase.google.com/products/hosting",
        "displayed_link": "https://firebase.google.com › products › hosting ",
        "cached_page": "",
        "snippet": "With Firebase Hosting, you can deploy a single-page web app, a mobile app landing page, or a progressive web app without all the hassle. plat_web ..."
      },
      {
        "position": 14,
        "title": "How to Choose the Best WordPress Hosting in 2023 ...",
        "link": "https://www.wpbeginner.com/wordpress-hosting/",
        "displayed_link": "https://www.wpbeginner.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "That's why they're an official WordPress recommended hosting provider. Note: Our wPBeginner website is also hosted on SiteGround Enterprise servers, and we love ..."
      },
      {
        "position": 15,
        "title": "Fully Dedicated & Managed WordPress Hosting Starting at $12",
        "link": "https://wpmudev.com/hosting/",
        "displayed_link": "https://wpmudev.com › hosting ",
        "cached_page": "",
        "snippet": "Everything you need for WordPress! Super-powered Hosting, 24/7 Live Support, Site Management tools, and Premium Plugins. 7-days FREE Trial."
      },
      {
        "position": 16,
        "title": "WordPress Hosting",
        "link": "https://wordpress.org/hosting/",
        "displayed_link": "https://wordpress.org › hosting ",
        "cached_page": "",
        "snippet": "Get web hosting for your WordPress website from providers that have modern and approved server configurations."
      },
      {
        "position": 17,
        "title": "Best Web Hosting For Small Business In 2023 – Forbes Advisor",
        "link": "https://www.forbes.com/advisor/business/software/best-web-hosting-services/",
        "displayed_link": "https://www.forbes.com › advisor › business › software ",
        "cached_page": "",
        "snippet": "Discover the best web hosting services available today. Our team carefully reviewed dozens of options, comparing pricing, reliability and more."
      },
      {
        "position": 18,
        "title": "Hosting & Deployment - Hugo",
        "link": "https://gohugo.io/hosting-and-deployment/",
        "displayed_link": "https://gohugo.io › hosting-and-deployment ",
        "cached_page": "",
        "snippet": "Hosting & Deployment. Because Hugo renders static websites, you can host your new Hugo website virtually anywhere. The following represent only a few of the ..."
      },
      {
        "position": 19,
        "title": "DigitalOcean | The Cloud for Builders",
        "link": "https://www.digitalocean.com/",
        "displayed_link": "https://www.digitalocean.com",
        "cached_page": "",
        "snippet": "Build eCommerce stores and websites seamlessly with Cloudways. Leave the hassles of running a website to the experts. Sign up for managed hosting through ..."
      },
      {
        "position": 20,
        "title": "Google Code Archive",
        "link": "https://code.google.com/archive/",
        "displayed_link": "https://code.google.com › archive ",
        "cached_page": "",
        "snippet": "You can learn more about the data served from Google Cloud Storage here. Google Code offered open-source project hosting on other domains besides just code."
      },
      {
        "position": 21,
        "title": "WordPress Hosting on a Managed Cloud Platform - Cloudways",
        "link": "https://www.cloudways.com/en/wordpress-hosting.php",
        "displayed_link": "https://www.cloudways.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "WordPress Hosting on managed cloud servers for instant speed boosts. Start the 3-day free trial to enjoy 24/7 support, free SSL, migration, backups & more."
      },
      {
        "position": 22,
        "title": "Wix.com: Free Website Builder | Create a Free Website",
        "link": "https://www.wix.com/",
        "displayed_link": "https://www.wix.com",
        "cached_page": "",
        "snippet": "Get scalable, free web hosting when you create your own website, and connect a professional domain name. Create a Site. Logo maker tool creating a customized ..."
      },
      {
        "position": 23,
        "title": "AWS Amplify Hosting | Fast & Secure Web App Hosting",
        "link": "https://aws.amazon.com/amplify/hosting/",
        "displayed_link": "https://aws.amazon.com › amplify › hosting ",
        "cached_page": "",
        "snippet": "AWS Amplify Hosting provides the easiest way to deploy and host fast, secure, and reliable web apps that scale with your business. Built on AWS."
      },
      {
        "position": 24,
        "title": "Shared Hosting - Reclaim Hosting",
        "link": "https://www.reclaimhosting.com/shared-hosting/",
        "displayed_link": "https://www.reclaimhosting.com › shared-hosting ",
        "cached_page": "",
        "snippet": "Reasonably priced student and faculty hosting plans with a host of functionality from free SSL certificates to automated software installation."
      },
      {
        "position": 25,
        "title": "Webflow web hosting: Fast, reliable service",
        "link": "https://webflow.com/hosting",
        "displayed_link": "https://webflow.com › hosting ",
        "cached_page": "",
        "snippet": "Webflow hosting is powered by the fastest and most reliable website hosting technology — without all the hassles of a website management platform."
      },
      {
        "position": 26,
        "title": "WordPress Hosting - Fast, Secure & Managed by Expert 24/7 ...",
        "link": "https://www.greengeeks.com/wordpress-hosting",
        "displayed_link": "https://www.greengeeks.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Jun 19, 2021  —  WordPress Hosting on the GreenGeeks Web Hosting Platform that's faster, more secure and backed by expert 24/7 technical support.",
        "snippet_extension": ["Jun 19, 2021"]
      },
      {
        "position": 27,
        "title": "Web Hosting Talk",
        "link": "https://www.mac-forums.com/link-forums/looking-for-great-information-on-hosting-or-servic.98/",
        "displayed_link": "https://www.mac-forums.com › link-forums › looking-f... ",
        "cached_page": "",
        "snippet": "Welcome to Web Hosting Talk. WHT is the largest, most influential web and cloud hosting community on the Internet. It is your main source for discussions ..."
      },
      {
        "position": 28,
        "title": "Hosting | Office of the Controller - UNLV",
        "link": "https://www.unlv.edu/controller/accountspayable/hosting",
        "displayed_link": "https://www.unlv.edu › controller › accountspayable ",
        "cached_page": "",
        "snippet": "Hosting includes official events of any size sponsored by a department on behalf of employees, students, or guests. Expenditures can include: Meals; Beverages ..."
      },
      {
        "position": 29,
        "title": "Secure Business Email for your organization - Zoho Mail",
        "link": "https://www.zoho.com/mail/",
        "displayed_link": "https://www.zoho.com › mail ",
        "cached_page": "",
        "snippet": "Ad-free Business Email Hosting with a clean, minimalist interface. Integrated Calendar, Contacts, Notes, Tasks apps. Free for up to 5 users."
      },
      {
        "position": 30,
        "title": "What is Web Hosting? - Beginner's Guide - Website.com",
        "link": "https://www.website.com/beginnerguide/webhosting/6/1/what-is-web-hosting?.ws",
        "displayed_link": "https://www.website.com › beginnerguide › what-is-we... ",
        "cached_page": "",
        "snippet": "A web host, or web hosting service provider provides the technologies and services needed for a website to be seen on the Internet."
      },
      {
        "position": 31,
        "title": "Responsible hosting in the United States - Airbnb Help Center",
        "link": "https://www.airbnb.ae/help/article/1376/responsible-hosting-in-the-united-states",
        "displayed_link": "https://www.airbnb.ae › help › article › responsible-host... ",
        "cached_page": "",
        "snippet": "We encourage Hosts to think carefully about their responsibilities. Hosting offers rich experiences, but it comes with a certain level of commitment."
      },
      {
        "position": 32,
        "title": "Upcoming Trainings - Art of Hosting",
        "link": "https://artofhosting.org/trainings-3/event-listing/",
        "displayed_link": "https://artofhosting.org › trainings-3 › event-listing ",
        "cached_page": "",
        "snippet": "Art of Hosting Trainings. Here is a listing of upcoming Art of Hosting trainings worldwide – mostly 3-day events where you are immersed in and learn about ..."
      },
      {
        "position": 33,
        "title": "Free Web Hosting - HubSpot",
        "link": "https://www.hubspot.com/products/cms/web-hosting",
        "displayed_link": "https://www.hubspot.com › products › cms › web-hosting ",
        "cached_page": "",
        "snippet": "Hosting helps to ensure your content is secure and reliable when it reaches your customers. CMS Hub offers premium website hosting – all for free, without extra ..."
      },
      {
        "position": 34,
        "title": "DreamHost - Web Hosting, Domain Names, WordPress & More",
        "link": "https://www.dreamhost.com/",
        "displayed_link": "https://www.dreamhost.com",
        "cached_page": "",
        "snippet": "DreamHost offers domain names, web hosting, managed WordPress hosting, business email, and much more. 100% uptime guarantee, 24/7 support. Sign up today!"
      },
      {
        "position": 35,
        "title": "Hosting - Craft CMS",
        "link": "https://craftcms.com/hosting",
        "displayed_link": "https://craftcms.com › hosting ",
        "cached_page": "",
        "snippet": "Craft-friendly hosting providers and learning resources to help you find the right web host for your project."
      },
      {
        "position": 36,
        "title": "IONOS » Hosting Provider | Websites. Domains. Server.",
        "link": "https://www.ionos.com/",
        "displayed_link": "https://www.ionos.com",
        "cached_page": "",
        "snippet": "IONOS, your digital partner for cloud solutions and web hosting, supporting your needs from websites, domains, servers, and more."
      },
      {
        "position": 37,
        "title": "hosting - Wiktionary",
        "link": "https://en.wiktionary.org/wiki/hosting",
        "displayed_link": "https://en.wiktionary.org › wiki › hosting ",
        "cached_page": "",
        "snippet": "hosting (countable and uncountable, plural hostings). (computing) Running and maintaining a computer system on someone's behalf. (obsolete) A battle."
      },
      {
        "position": 38,
        "title": "Vultr.com: SSD VPS Servers, Cloud Servers and Cloud Hosting",
        "link": "https://www.vultr.com/",
        "displayed_link": "https://www.vultr.com",
        "cached_page": "",
        "snippet": "Vultr Global Cloud Hosting - Brilliantly Fast SSD VPS Cloud Servers. 100% KVM Virtualization."
      },
      {
        "position": 39,
        "title": "Apex Hosting: Minecraft Server Hosting",
        "link": "https://apexminecrafthosting.com/",
        "displayed_link": "https://apexminecrafthosting.com",
        "cached_page": "",
        "snippet": "The best Minecraft server hosting provider with lag free hardware, 24/7 live chat support and video guides. Start your server today for as cheap as $2.99."
      },
      {
        "position": 40,
        "title": "Website Hosting Options | University IT",
        "link": "https://uit.stanford.edu/guide/website/hosting",
        "displayed_link": "https://uit.stanford.edu › guide › website › hosting ",
        "cached_page": "",
        "snippet": "Features, Google Sites, Stanford Domains, Stanford Sites, Drupal Hosting on Acquia, web.stanford.edu (AFS-based websites) ..."
      },
      {
        "position": 41,
        "title": "Hosting Platform of Choice",
        "link": "https://cpanel.net/",
        "displayed_link": "https://cpanel.net",
        "cached_page": "",
        "snippet": "With its world-class support and rich feature set, cPanel & WHM has been the industry-leading web hosting platform for over 20 years."
      },
      {
        "position": 42,
        "title": "What is Hosting? - Definition from Techopedia",
        "link": "https://www.techopedia.com/definition/29023/web-hosting",
        "displayed_link": "https://www.techopedia.com › ... › Internet › Hosting ",
        "cached_page": "",
        "snippet": "Hosting, in its most generic sense, is a service through which storage and computing resources ... Hosting is also known as Web hosting or website hosting."
      },
      {
        "position": 43,
        "title": "Kinsta® Cloud Hosting for All Your Web Projects",
        "link": "https://kinsta.com/",
        "displayed_link": "https://kinsta.com",
        "cached_page": "",
        "snippet": "Join the growing club of companies, developers & entrepreneurs who made the switch to our cloud platform for simpler, faster, more reliable cloud hosting."
      },
      {
        "position": 44,
        "title": "Web Development and Hosting - Technology @ Berkeley",
        "link": "https://technology.berkeley.edu/web",
        "displayed_link": "https://technology.berkeley.edu › web ",
        "cached_page": "",
        "snippet": "Web Development & Hosting icon. Tools and services for publishing and managing online content. A variety of free and for-fee options allow the UC Berkeley ..."
      },
      {
        "position": 45,
        "title": "Web Hosting / U-M Information and Technology Services",
        "link": "https://its.umich.edu/computing/web-mobile/web-hosting",
        "displayed_link": "https://its.umich.edu › computing › web-mobile › web-... ",
        "cached_page": "",
        "snippet": "Web Hosting is an easy-to-use service that provides campus users access to their own web applications without needing to download, install, and maintain ..."
      },
      {
        "position": 46,
        "title": "Render: Cloud Application Hosting for Developers",
        "link": "https://render.com/",
        "displayed_link": "https://render.com",
        "cached_page": "",
        "snippet": "Render is a unified cloud to build and run all your apps and websites with free TLS certificates, global CDN, private networks and auto deploys from Git."
      },
      {
        "position": 47,
        "title": "Linode: Cloud Computing & Linux Servers | Alternative to AWS",
        "link": "https://www.linode.com/",
        "displayed_link": "https://www.linode.com",
        "cached_page": "",
        "snippet": "Simplify your infrastructure with Linode's cloud computing and hosting solutions and develop, deploy, and scale faster and easier."
      },
      {
        "position": 48,
        "title": "Hosting & Databases - NIH CIT",
        "link": "https://www.cit.nih.gov/services/hosting-databases",
        "displayed_link": "https://www.cit.nih.gov › services › hosting-databases ",
        "cached_page": "",
        "snippet": "CIT's computing and storage infrastructure and scalable database solutions meet NIH's hosting requirements and data-management needs."
      },
      {
        "position": 49,
        "title": "Web Hosting Plans - Media Temple",
        "link": "https://mediatemple.net/webhosting",
        "displayed_link": "https://mediatemple.net › webhosting ",
        "cached_page": "",
        "snippet": "Media Temple offers web hosting plans optimized for your needs. From shared hosting to AWS cloud hosting or dedicated servers, contact us today to find your ..."
      },
      {
        "position": 50,
        "title": "Platform.sh: Cloud hosting platform",
        "link": "https://platform.sh/",
        "displayed_link": "https://platform.sh",
        "cached_page": "",
        "snippet": "The end-to-end cloud PaaS for hosting, development, and deployment."
      },
      {
        "position": 51,
        "title": "Hosting Capacity - Con Edison",
        "link": "https://www.coned.com/en/business-partners/hosting-capacity",
        "displayed_link": "https://www.coned.com › business-partners › hosting-ca... ",
        "cached_page": "",
        "snippet": "Hosting Capacity. Whether you're a customer, contractor, or developer, our interactive maps can help you identify potential sites for private generation."
      },
      {
        "position": 52,
        "title": "Dotster.com: Web Hosting, Domain Name Registration",
        "link": "https://www.dotster.com/",
        "displayed_link": "https://www.dotster.com",
        "cached_page": "",
        "snippet": "Small business web hosting offering additional business services such as: domain name registrations, email accounts, web services, and various small ..."
      },
      {
        "position": 53,
        "title": "Tax Software Hosting - Cloud Solution for Lacerte & ProSeries",
        "link": "https://proconnect.intuit.com/desktop-hosting/",
        "displayed_link": "https://proconnect.intuit.com › desktop-hosting ",
        "cached_page": "",
        "snippet": "Introducing Cloud Hosting for Intuit Lacerte and ProSeries powered by Right Networks. Same tax software. Now online. More flexibility."
      },
      {
        "position": 54,
        "title": "About hosting providers - Google Domains Help",
        "link": "https://support.google.com/domains/answer/3288265?hl=en",
        "displayed_link": "https://support.google.com › domains › answer ",
        "cached_page": "",
        "snippet": "Web hosting provider A web hosting provider is a company that enables businesses and individuals to make their websites available through the World Wide Web ..."
      },
      {
        "position": 55,
        "title": "Divi Hosting - Best Hosting For Divi - Elegant Themes",
        "link": "https://www.elegantthemes.com/hosting/",
        "displayed_link": "https://www.elegantthemes.com › hosting ",
        "cached_page": "",
        "snippet": "Divi Hosting. We've partnered with leading companies in the WordPress Hosting industry to bring you the most reliable, Divi-compatible hosting."
      },
      {
        "position": 56,
        "title": "Gandi.net - Gandi.net: Domain Names, Web Hosting, SSL ...",
        "link": "https://www.gandi.net/en",
        "displayed_link": "https://www.gandi.net › ... ",
        "cached_page": "",
        "snippet": "Your VPS servers. Keep control over the hosting of your web projects thanks to our VPS offer. Starting at €5.00 excl. tax/month."
      },
      {
        "position": 57,
        "title": "Cheap Web Hosting - Best Website Hosting Service - NameSilo",
        "link": "https://www.namesilo.com/hosting",
        "displayed_link": "https://www.namesilo.com › hosting ",
        "cached_page": "",
        "snippet": "Free email, website builder, and easy WordPress installation are included with all of our hosting plans. Get NameSilo Hosting Today. Find the Flexible Plans for ..."
      },
      {
        "position": 58,
        "title": "Web Hosting in the Cloud | Networksolutions.com",
        "link": "https://www.networksolutions.com/hosting",
        "displayed_link": "https://www.networksolutions.com › hosting ",
        "cached_page": "",
        "snippet": "Need reliable and secure web hosting with live technical support? We've got you covered. Find the right Network Solutions for your business here."
      },
      {
        "position": 59,
        "title": "Web Hosting Solutions - porkbun.com",
        "link": "https://porkbun.com/products/web_hosting",
        "displayed_link": "https://porkbun.com › products › web_hosting ",
        "cached_page": "",
        "snippet": "Up and running in seconds! A third of the web uses WordPress, from hobby blogs to the biggest news sites online. We've built a dedicated WordPress hosting ..."
      },
      {
        "position": 60,
        "title": "Gcore | Global Hosting, CDN, Edge and Cloud Services",
        "link": "https://gcore.com/",
        "displayed_link": "https://gcore.com",
        "cached_page": "",
        "snippet": "We provide powerful solutions that will help your business grow globally. Try our superior performance for free."
      },
      {
        "position": 61,
        "title": "Managed WordPress Hosting from Pressable",
        "link": "https://pressable.com/",
        "displayed_link": "https://pressable.com",
        "cached_page": "",
        "snippet": "Pressable is where WordPress works best. We provide reliable, secure, and speedy managed WordPress hosting backed by expert support."
      },
      {
        "position": 62,
        "title": "WordPress Hosting and Developer Tools - Pantheon.io",
        "link": "https://pantheon.io/product/wordpress-hosting",
        "displayed_link": "https://pantheon.io › product › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Leverage our hosting and WebOps platform to achieve unrivaled speed, uptime, and scalability on WordPress sites. · Pantheon is a Different Kind of WordPress Host.",
        "reviews": {
          "rated": "668 reviews",
          "rating": "Rating: 8.9/10"
        }
      },
      {
        "position": 63,
        "title": "You Don't Need a Guest Room If You Have These Hosting ...",
        "link": "https://www.nytimes.com/wirecutter/reviews/hosting-guests-no-guest-room/",
        "displayed_link": "https://www.nytimes.com › Home › Bedroom ",
        "cached_page": "",
        "snippet": "You Don't Need a Guest Room If You Have These Hosting Essentials · An air mattress with a built-in pump · A support board to make a sofa bed more ...",
        "snippet_extension": ["Nov 18, 2022"]
      },
      {
        "position": 64,
        "title": "Email hosting and forwarding - Shopify Help Center",
        "link": "https://help.shopify.com/en/manual/domains/email-forwarding-and-hosting",
        "displayed_link": "https://help.shopify.com › ... › Topics › Domains ",
        "cached_page": "",
        "snippet": "Email hosting and forwarding ... Email is an important tool for communicating with customers and sending notifications. You can increase trust in your business by ..."
      },
      {
        "position": 65,
        "title": "Hosting Plans - Liquid Web",
        "link": "https://www.liquidweb.com/products/",
        "displayed_link": "https://www.liquidweb.com › products ",
        "cached_page": "",
        "snippet": "Big or small. Dedicated, VPS, Cloud or Managed WordPress. We've got everything you need to power your potential. Chat with a hosting advisor and learn more."
      },
      {
        "position": 66,
        "title": "ZAP-Hosting.com: Server Hosting with ZAP 2.5 - instant online ...",
        "link": "https://zap-hosting.com/",
        "displayed_link": "https://zap-hosting.com",
        "cached_page": "",
        "snippet": "Rent high quality servers, DDoS protected servers with SSD performance, Gameserver, VPS, Rootserver, Ts3 and more!"
      },
      {
        "position": 67,
        "title": "Hosting Capacity Maps and Useful Links",
        "link": "https://www3.dps.ny.gov/W/PSCWeb.nsf/All/6143542BD0775DEC85257FF10056479C",
        "displayed_link": "https://www3.dps.ny.gov › PSCWeb.nsf › All ",
        "cached_page": "",
        "snippet": "National Grid, Hosting Capacity Map. Con Edison, Hosting Capacity Map. Central Hudson, Hosting Capacity Map. Orange and Rockland, Hosting ...",
        "snippet_extension": ["Feb 7, 2020"]
      },
      {
        "position": 68,
        "title": "Hosting - R Plumber",
        "link": "https://www.rplumber.io/articles/hosting.html",
        "displayed_link": "https://www.rplumber.io › articles › hosting ",
        "cached_page": "",
        "snippet": "Once you have developed your Plumber API, the next step is to find a way to host it. If you haven't dealt with hosting an application on a server before, ..."
      },
      {
        "position": 69,
        "title": "Statement by Press Secretary Jen Psaki on the United States ...",
        "link": "https://www.whitehouse.gov/briefing-room/statements-releases/2022/02/10/statement-by-press-secretary-jen-psaki-on-the-united-states-hosting-apec-in-2023/",
        "displayed_link": "https://www.whitehouse.gov › 2022/02/10 › statement-... ",
        "cached_page": "",
        "snippet": "Statement by Press Secretary Jen Psaki on the United States Hosting APEC in 2023. Home · Briefing Room · Statements and Releases.",
        "snippet_extension": ["Feb 10, 2022"]
      },
      {
        "position": 70,
        "title": "Hosting a static website using Amazon S3",
        "link": "https://links.esri.com/amazon-s3-website-hosting",
        "displayed_link": "https://links.esri.com › amazon-s3-website-hosting ",
        "cached_page": "",
        "snippet": "Host a static website on Amazon S3 by configuring your bucket for website hosting and then uploading your content to the bucket."
      },
      {
        "position": 71,
        "title": "Inside the Bulletproof Hosting Business - Trend Micro",
        "link": "https://www.trendmicro.com/vinfo/us/security/news/cybercrime-and-digital-threats/inside-the-bulletproof-hosting-business-cybercrime-methods-opsec",
        "displayed_link": "https://www.trendmicro.com › vinfo › security › news ",
        "cached_page": "",
        "snippet": "Oct 6, 2020  —  Bulletproof hosting (BPH) services have long been crucial parts of the cybercriminal infrastructure. How do they protect malicious ...",
        "snippet_extension": ["Oct 6, 2020"]
      },
      {
        "position": 72,
        "title": "Managed WordPress Hosting | Webhosting - Media Temple",
        "link": "https://thebloggingbuddha.com/goto/mediatemple-hosting/",
        "displayed_link": "https://thebloggingbuddha.com › goto › mediatemple-h... ",
        "cached_page": "",
        "snippet": "Unlock all the power of WordPress with Media Temple's Managed WordPress hosting. Our WordPress experts are ready and waiting to help you."
      },
      {
        "position": 73,
        "title": "Joomla & WordPress Hosting, Support and Tutorials",
        "link": "https://www.cloudaccess.net/",
        "displayed_link": "https://www.cloudaccess.net",
        "cached_page": "",
        "snippet": "A complete web hosting platform built specifically for Joomla & WordPress. We provide written and video tutorials, training, support and optimized cloud ..."
      },
      {
        "position": 74,
        "title": "FastComet - Managed Cloud Hosting with 24/7 Support",
        "link": "https://www.fastcomet.com/",
        "displayed_link": "https://www.fastcomet.com",
        "cached_page": "",
        "snippet": "FastCloud® - Advanced cloud hosting platform with 24/7 Expert Support & 11 Datacenter Locations. We will handle caching, transfers, security, updates."
      },
      {
        "position": 75,
        "title": "AllWebCo Business Web Hosting & Domains",
        "link": "https://allwebco.com/",
        "displayed_link": "https://allwebco.com",
        "cached_page": "",
        "snippet": "Web Hosting, Domain Hosting, Web Host - AllWebCo, Top Hosting Provider for the best Website Hosting, Web Hosting Services, Business, Ecommerce, Frontpage, ..."
      },
      {
        "position": 76,
        "title": "Cloud Hosting - IBM",
        "link": "https://www.ibm.com/cloud/hosting",
        "displayed_link": "https://www.ibm.com › cloud › hosting ",
        "cached_page": "",
        "snippet": "IBM Cloud hosting provides a network of connected virtual and physical cloud servers to host your applications, solutions and websites."
      },
      {
        "position": 77,
        "title": "Web Hosting | Compare, Buy, Host a Website | OVHcloud",
        "link": "https://www.ovhcloud.com/en/web-hosting/",
        "displayed_link": "https://www.ovhcloud.com › web-hosting ",
        "cached_page": "",
        "snippet": "Publish your blog, business website or online store. Managed hosting; Unlimited monthly traffic; Multisite management. Web_Hosting_Hero | OVHcloud.",
        "reviews": {
          "rated": "476 votes",
          "rating": "Rating: 4.8"
        }
      },
      {
        "position": 78,
        "title": "Buy cheap, fast and reliable hosting plans - One.com",
        "link": "https://www.one.com/en/plans-pricing",
        "displayed_link": "https://www.one.com › plans-pricing ",
        "cached_page": "",
        "snippet": "All-inclusive web hosting packages. All plans include an SSL certificate, Website Builder, Email, Free Google Ads credit and 24/7 support."
      },
      {
        "position": 79,
        "title": "Web hosting - UW–⁠Madison Information Technology",
        "link": "https://it.wisc.edu/services/web-hosting/",
        "displayed_link": "https://it.wisc.edu › services › web-hosting ",
        "cached_page": "",
        "snippet": "Sep 6, 2022  —  Providing a community test and production web hosting environment for UW-Madison and its affiliates.",
        "snippet_extension": ["Sep 6, 2022"]
      },
      {
        "position": 80,
        "title": "Web Hosting – Secure Domain Hosting Services - Name.com",
        "link": "https://www.name.com/purchase/hosting",
        "displayed_link": "https://www.name.com › purchase › hosting ",
        "cached_page": "",
        "snippet": "All hosting packages include. Free SSL. All domain name hosting services include a free SSL certificate. New customers who purchase a yearly hosting plan will ..."
      },
      {
        "position": 81,
        "title": "Atlantic.Net: Customized Hosting Solutions For Your Business",
        "link": "https://www.atlantic.net/",
        "displayed_link": "https://www.atlantic.net",
        "cached_page": "",
        "snippet": "We offer hosting Solutions customized to your business needs - cloud, managed, dedicated, HIPAA compliant, and more. Get a free consultation today!"
      },
      {
        "position": 82,
        "title": "Hosting & Monitoring solution - Oracle Cerner",
        "link": "https://www.cerner.com/solutions/hosting-monitoring",
        "displayed_link": "https://www.cerner.com › solutions › hosting-monitoring ",
        "cached_page": "",
        "snippet": "We offer award-winning hosting capabilities for Cerner Millennium®, Soarian® and software as a service (SaaS), as well as more than 100 non-Cerner solutions."
      },
      {
        "position": 83,
        "title": "Drupal Web Hosting | Drupal.org",
        "link": "https://www.drupal.org/hosting",
        "displayed_link": "https://www.drupal.org › hosting ",
        "cached_page": "",
        "snippet": "Drupal Web Hosting ... Building a single Drupal site or managing hundreds of mission-critical digital properties should be simple. One click to install Drupal and ..."
      },
      {
        "position": 84,
        "title": "Managed WordPress Hosting From SiteGround - ThemeForest",
        "link": "https://themeforest.net/wordpress-hosting",
        "displayed_link": "https://themeforest.net › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Exclusive Envato offer! Up to 75% off fast and reliable managed WordPress hosting services and free theme installation. Recommended for their uptime, ..."
      },
      {
        "position": 85,
        "title": "Elementor Cloud Website: Built-In Hosting for WordPress Sites",
        "link": "https://elementor.com/features/cloud/",
        "displayed_link": "https://elementor.com › features › cloud ",
        "cached_page": "",
        "snippet": "Get everything you need, all in one place: Hosting, WordPress pre-installed, and all the Elementor Pro web-creation tools you need for complete design ..."
      },
      {
        "position": 86,
        "title": "cPanel Web Hosting Service",
        "link": "https://web.illinois.edu/",
        "displayed_link": "https://web.illinois.edu",
        "cached_page": "",
        "snippet": "Creating and hosting your website at web.illinois.edu offers a great deal of flexibility with less complexity than managing an entire web server."
      },
      {
        "position": 87,
        "title": "Search for hosting | EURAXESS - European Union",
        "link": "https://euraxess.ec.europa.eu/jobs/hosting/search",
        "displayed_link": "https://euraxess.ec.europa.eu › jobs › hosting › search ",
        "cached_page": "",
        "snippet": "Search for hosting. Dear user, the EURAXESS portal has been renewed to offer you a better and more secure experience.",
        "snippet_extension": ["Results 1 - 10"]
      },
      {
        "position": 88,
        "title": "The Green Hosting Directory, as used by the apps",
        "link": "https://www.thegreenwebfoundation.org/directory/",
        "displayed_link": "https://www.thegreenwebfoundation.org › directory ",
        "cached_page": "",
        "snippet": "On this page, you will find our Green Hosting Directory. For every country, the list starts with Partners: the hosting companies that provide proof of their ..."
      },
      {
        "position": 89,
        "title": "WordPress hosting plans | Reliable & secure web ... - iPage",
        "link": "https://www.ipage.com/wordpress-hosting",
        "displayed_link": "https://www.ipage.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Get 24/7 WordPress support along with a free domain, 1-click WordPress Install and unlimited web space! Check out our best value WordPress hosting plans ..."
      },
      {
        "position": 90,
        "title": "'WTH did I just witness?' Magic Eden turns porno after hosting ...",
        "link": "https://cointelegraph.com/news/wth-did-i-just-witness-magic-eden-turns-porno-after-hosting-service-hacked",
        "displayed_link": "https://cointelegraph.com › news › wth-did-i-just-witnes... ",
        "cached_page": "",
        "snippet": "The NFT marketplace said the issue was caused by its third-party image hosting provider and assured users their NFTs were safe.",
        "snippet_extension": ["5 hours ago"]
      },
      {
        "position": 91,
        "title": "Hosting Capacity Map - Ameren Illinois",
        "link": "https://www.ameren.com/illinois/residential/supply-choice/renewables/hosting-capacity-map",
        "displayed_link": "https://www.ameren.com › supply-choice › renewables ",
        "cached_page": "",
        "snippet": "Hosting Capacity Map. The Ameren Illinois Company (AIC) hosting capacity maps display a high-level visualization of the available hosting capacity for ..."
      },
      {
        "position": 92,
        "title": "Serilog.Extensions.Hosting 5.0.1 - NuGet",
        "link": "https://www.nuget.org/packages/Serilog.Extensions.Hosting",
        "displayed_link": "https://www.nuget.org › packages › Serilog.Extensions.... ",
        "cached_page": "",
        "snippet": "Hosting 5.0.1. The ID prefix of this package has been reserved for one of the owners of this Prefix Reserved .NET Standard 2.0 .NET CLI; Package Manager ..."
      },
      {
        "position": 93,
        "title": "Hosting Capacity Tool - Dominion Energy",
        "link": "https://www.dominionenergy.com/projects-and-facilities/electric-projects/energy-grid-transformation/hosting-capacity-tool",
        "displayed_link": "https://www.dominionenergy.com › electric-projects ",
        "cached_page": "",
        "snippet": "Hosting Capacity Tool. This interactive tool helps optimize solar projects in Virginia and North Carolina by providing guidance to customers about which parts ..."
      },
      {
        "position": 94,
        "title": "WordPress.com: Build a Site, Sell Your Stuff, Start a Blog & More",
        "link": "https://wordpress.com/",
        "displayed_link": "https://wordpress.com",
        "cached_page": "",
        "snippet": "Create a free website or build a blog with ease on WordPress.com. Dozens of free, customizable, mobile-ready designs and themes. Free hosting and support."
      },
      {
        "position": 95,
        "title": "Pagely – Managed WordPress Hosting for Businesses ...",
        "link": "https://pagely.com/",
        "displayed_link": "https://pagely.com",
        "cached_page": "",
        "snippet": "Back in the mid-2000s, we saw a need in the market for a simplified, accessible WordPress platform. So we built our own. Today, we serve discerning clients ..."
      },
      {
        "position": 96,
        "title": "Download .NET 6.0 (Linux, macOS, and Windows) - Microsoft",
        "link": "https://dotnet.microsoft.com/en-us/download/dotnet/6.0",
        "displayed_link": "https://dotnet.microsoft.com › en-us › download › dotnet ",
        "cached_page": "",
        "snippet": "On Windows, we recommend installing the Hosting Bundle, which includes the .NET Runtime and IIS support. IIS runtime support (ASP.NET Core Module v2): 16.0."
      },
      {
        "position": 97,
        "title": "Concrete CMS Hosting Pricing",
        "link": "https://www.concretecms.com/hosting",
        "displayed_link": "https://www.concretecms.com › hosting ",
        "cached_page": "",
        "snippet": "Concrete CMS hosting. If you're building something mission critical, host it with the Core Team. Deploy to production and stage directly from GitLab."
      }
    ],
    "people_also_ask": [
      {
        "question": "Whats hosting means? ",
        "answer": null
      },
      {
        "question": "What is an example of hosting? ",
        "answer": null
      },
      {
        "question": "What is hosting and its types? ",
        "answer": null
      },
      {
        "question": "What are the five types of hosting? ",
        "answer": null
      }
    ],
    "related_search": [
      {
        "title": "hosting website",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hosting+website&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj2AhAB"
      },
      {
        "title": "hostinger",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hostinger&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj1AhAB"
      },
      {
        "title": "hosting and domain",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hosting+and+domain&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQjzAhAB"
      },
      {
        "title": "free hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Free+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj0AhAB"
      },
      {
        "title": "best web hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Best+web+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQjvAhAB"
      },
      {
        "title": "wp hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=WP+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj4AhAB"
      },
      {
        "title": "hostinger login",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hostinger+login&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj5AhAB"
      },
      {
        "title": "godaddy hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=GoDaddy+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj3AhAB"
      }
    ]
  }
}
				</code>
			
									
						</pre>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="flex flex-col sm:pt-10 xl:pt-32 md:pt-16">
			<div class="mx-auto">
				<p style="color: #8460E5;" class="font-bold text-center text-purple-600 text-4xl xs:pt-10">Easy Integration</p><span style="color: #8460E5;" class="text-purple-600  text-2xl m-16">___________</span>
			</div>
			<p class="text-center xl:w-1/4 mx-auto">Select your favored integration method and copy
				the provided code.</p>
		</div>


		<br><br><br><br>

		<style>
			.tab-btn.active {
				background-color: #8460E5;
				color: #FFFFFF;
			}
		</style>
		<div class="group-1 2xl:px-6 md:flex md:h-12 md:space-y-0 xs:space-y-6 sm:space-y-6 xl:space-x-16 md:space-x-4 text-center">
			<button class="xs:p-3 tab-btn active  focus:outline-none  xs:w-full sm:w-1/2 cursor-pointer  text-black border-2 font-bold rounded-full w-1/5">Curl</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold text-black  border-2 rounded-full w-1/5">Ruby</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold  text-black  border-2 rounded-full w-1/5">Python</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold text-black  border-2 rounded-full w-1/5">Node.js</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold text-black  border-2 rounded-full w-1/5">PHP</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold  text-black  border-2 rounded-full w-1/5">Java</button>
			<button class="xs:p-3 tab-btn focus:outline-none xs:w-full sm:w-1/2 cursor-pointer   font-bold text-black  border-2 rounded-full w-1/5">GO</button>
		</div>

	</div>

	<script>
		var tabLink = document.querySelectorAll(".group-1 button")


		tabLink.forEach(function(item) {
			item.addEventListener(
				"click",
				function(e) {
					tabLink.forEach(function(item) {
						item.classList.remove("active");
					});
					item.classList.add("active");

					console.log(e.target);
				},
				false
			);
		});
	</script>

	<div class="2xl:pt-4">
		<div id="textToCopy">
			<div class="copy-text">
				<div class="bg-white w-auto px-12">
					<div class="tab-pane fade show  active" id="curl" role="tabpanel" aria-labelledby="curl-tab">
						<pre class="language-bash relative" style="border-radius: 18px;" id="curlsourcecode">
<button class="absolute top-3 right-3" style="top:20px;right:20px" id="copyButton"><i class="fa fa-clone"></i></button><span class="absolute top-3 right-3" style="top:20px;right:44px" id="copyResult"></span>
     <code class="language-css">
require 'uri'
require 'net/http'
url = URI("https://api.serphouse.com/serp/live")
http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_NONE
request = Net::HTTP::Post.new(url)
request["accept"] = 'application/json'
request["content-type"] = 'application/json'
request["authorization"] = 'Bearer API_TOKEN'
request.body = '{"data": {
	"domain": "google.com",
	"lang": "en",
	"q": "Coffee",
	"loc": "Texas,United States",
	"device": "desktop",
	"serp_type": "web"
}}'
response = http.request(request)
puts response.read_body
				</code>
			
									
						</pre>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex flex-col pt-32 px-8">
		<div class="sm:mx-auto">
			<p style="color: #8460E5;" class="font-bold text-center text-purple-600 text-4xl">What Makes Us Different?</p><span style="color: #8460E5;" class="text-purple-600  text-2xl xs:m-16 sm:mx-40 m-40">___________</span>
		</div>
		<p class="text-center font-normal pt-1 mx-auto">Leverage the power of world-class SERP API technology</p>
		<p class="text-center font-normal xs:mx-0 pt-12 mx-10">Who can claim that planning an SEO approach is not a painstaking & labor-intensive task? Keyword analysis, technical review, link building, Rank Tracker, increasing visibility of a website, analyzing the search results, all such tasks are simply a tiny fraction of an SEO’s periodic system. With SERPhouse Search API; Digital Marketing Agencies, Webmasters and Developers can utilize the data in order to blend them inside their private applications or business streams.</p>

		<p class="text-center font-normal xs:mx-0 pt-10 mx-10">SERP API SEO tools provide a window of opportunity for their clients to employ SERP APIs and stimulate more favorable outcomes. SERPhouse API presents the Top-100 SERP results for a keyword, specific to the selected search engines like Google or Bing. Our integrated Google Search API & Bing Search API helps design optimized content, detect & fix website issues and further assist rationalize the entire process of data collection.</p>

		<p class="text-center font-normal xs:mx-0 pt-10 mx-10">We employ Google Knowledge Graph API that lets users identify your business and reach out to you without even clicking on your webpage. You can design your search engine to explore both images & maps using Google Images API.
			Implement new techniques into your SEO analysis to enhance productivity and conserve your time on hand-operated tasks. Seize your share of the market before your opponents do!</p>
	</div>

	<div class="flex flex-col pt-32">
		<div class="xl:mx-auto">
			<p style="color: #8460E5;" class="font-bold text-center text-purple-600 xs:mx-14 sm:text-2xl xl:text-4xl">Why every business prefers SERPHouse SERP API</p><span style="color: #8460E5;" class="text-purple-600 lg:mx-64 xl:text-4xl text-2xl sm:mx-40 xs:px-6 md:mx-48 xl:mx-64">_______________________</span>
		</div>

	</div>

	<br><br><br><br>

	</div>
	<div class="bg-white  md:mx-10 sm:mx-32">
		<div class="sm:bg-purple-200 xs:px-12 rounded-lg">
			<div class="md:flex flex-row sm:bg-purple-200  xs:bg-purple-100 xs:p-10 md:space-y-0 xs:space-y-12 justify-around ">
				<div class="sm:bg-purple-200">
					<img src="http://localhost/ci/assets/3.1.png" class="w-16  pb-4 xs:w-12 xs:mx-auto">
					<p style="color:#8460E5" class=" text-center font-bold xs:text-xl ">99.95% Uptime<span class="invisible">d</span></p><br>
				</div>
				<div class="sm:bg-purple-200">
					<img src="http://localhost/ci/assets/3.2.png" class="w-16  pb-4 xs:w-12 xs:mx-auto">
					<p style="color:#8460E5" class=" text-center font-bold xs:text-xl  ">Dedicated Support</p><br>
				</div>
				<div class="sm:bg-purple-200">
					<img src="http://localhost/ci/assets/3.3.png" class="w-16  pb-4 xs:w-12 xs:mx-auto">
					<p style="color:#8460E5" class="text-center  font-bold xs:text-xl  ">Enterprise Scaling</p><br>
				</div>
			</div>
		</div>
	</div>

	<div class="flex flex-col 2xl: pt-18xs:pt-10 pt-32">
		<div class="lg:mx-auto">
			<p style="color: #8460E5;" class="font-bold text-center text-purple-600 sm:text-4xl">Frequently Asked Questions</p><span style="color: #8460E5;" class="text-purple-600 xs:m-16  text-2xl sm:mx-40 lg:mx-64">________________</span>
		</div>
		<p class="text-center xl:pr-16 lg:mx-auto xl:pl-20">SERP API Questions? Look here</p>
	</div>

	<div class="md:grid grid-cols-2 ">
		<div class="bg-white">
			<div class="items-center 2xl:py-0 md:py-20">
				<img src="http://localhost/ci/assets/3.4.png">
			</div>
		</div>
		<div class="bg-white 2xl:py-28 lg:xl-56 sm:mx-20 xl:px-20  xs:mx-10 md:-m-1 md:py-16">
			<div class="grid grid-cols-1 divide-y xs:space-y-8 xl:my-10  space-y-4">
				<div style="background: #F8F8F8;
						box-shadow: 0px 0px 6.91209px rgba(0, 0, 0, 0.25);
						border-radius: 14.8116px;" class="bg-white xs:p-3   rounded-2xl font-medium sm:p-4">
					<div class="transition">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center ">
							<i class="fas fa-plus"></i>
							<h3>Web scraping is hacking?</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Our asked point her she seems.
							</p>
						</div>
					</div>
				</div>

				<div style="background: #F8F8F8;
					box-shadow: 0px 0px 6.91209px rgba(0, 0, 0, 0.25);
					border-radius: 14.8116px;" class="bg-white  xs:p-3  rounded-2xl font-medium sm:p-4">
					<div class="transition">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center ">
							<i class="fas fa-plus"></i>
							<h3>Web scraping is an act of extracting information that is publicly available on the internet.</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Our asked point her she seems.
							</p>
						</div>
					</div>
				</div>


				<div style="background: #F8F8F8;
						box-shadow: 0px 0px 6.91209px rgba(0, 0, 0, 0.25);
						border-radius: 14.8116px;" class="bg-white xs:p-3    rounded-2xl font-medium sm:p-4">
					<div class="transition ">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center">
							<i class="fas fa-plus"></i>
							<h3>Is it legal to scrape data from a search result?</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Web scraping is an act of extracting information that is publicly available on the internet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum laborum ad officiis dignissimos quibusdam sit fuga et debitis itaque! Fugit necessitatibus, velit assumenda iste eius iure. Fugiat ea accusantium ipsam.
							</p>
						</div>
					</div>
				</div>


				<div style="background: #F8F8F8;
						box-shadow: 0px 0px 6.91209px rgba(0, 0, 0, 0.25);
						border-radius: 14.8116px;" class="bg-white xs:p-3  rounded-2xl font-medium sm:p-4">
					<div class="transition ">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center">
							<i class="fas fa-plus"></i>
							<h3>What is SERP and How SERPHouse can help you?</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Our asked point her she seems.
							</p>
						</div>
					</div>
				</div>


				<div style="background: #F8F8F8;
						box-shadow: 0px 0px 6.91209px rgba(0, 0, 0, 0.25);
						border-radius: 14.8116px;" class="bg-white xs:p-3  rounded-2xl font-medium sm:p-4">
					<div class="transition">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center">
							<i class="fas fa-plus"></i>
							<h3>What is the API's uptime?</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Our asked point her she seems.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="flex bg-white flex-col sm:pt-24  space-y-4 pt-10">
		<div class="text-center xs:pb-4 font-bold text-4xl ">
			<!-- <div class="bg-local bg-no-repeat" style="background-image: url('http://localhost/ci/assets/5.9.png')"> -->
			<span>
				What our Clients Says
				<span>
		</div>

		</span>
		</span>

	</div>
	<p class="text-center lg:w-1/4  md:w-1/2  xl:w-1/3  2xl:w-1/4 xs:w-2/3 mx-auto">Our Clients send us bunch of smilies with our services and we love them</p>
	<img src="http://localhost/ci/assets/4.3.png" class="w-24 mx-auto rounded-full">

	<p class="text-center sm:w-1/4 mx-auto font-bold">Raymond Galario</p>
	<p class="text-center sm:w-1/4 mx-auto">SEO Developer</p>
	<img src="http://localhost/ci/assets/4.4.png" class="w-16 mx-auto">

	<p class="text-center sm:px-40 xl:w-1/2  mx-auto xs:px-10 font-bold">I have been using it for my SEO tool. And i experienced 100% uptime and get support on my all the concern very quickly
	</p>

	</div>

	<div class="grid xl:grid-cols-2  bg-white">

		<div class="items-center">
			<img src="http://localhost/ci/assets/4.7.png">
		</div>

		<!-- <div class="space-y-3 xl:p-32 md:p-10 lg:px-32"> -->
		<div class="xl:py-40  xs:px-4 xl:-m-24 xl:pt-56 sm:px-20">

			<span class="font-bold text-3xl  ">Get in touch with us!
			</span>

			<div>
				<span class="text-black  text-2xl">______</span>
			</div>

			<span class="">You may contact us from here for any concern.
			</span>


			<div class="grid md:grid-rows-3 w-3/4 md:grid-flow-col gap-4 pt-10">
				<div class=" bg-white col-span-2 ">
					<div class="bg-white">
						<input class="outline-none border-none   rounded-md  sm:p-4 " placeholder="Your Name">
					</div>
				</div>
				<div class=" bg-white row-span-2 col-span-2 ">
					<div class="bg-white">
						<input class="outline-none border-none  rounded-md  sm:p-4 " placeholder="Your Email">
					</div>
				</div>
				<div class=" bg-white row-span-3 sm:pb-3 ">
					<div class="bg-white xs:pb-10">
						<input class="outline-none border-none   rounded-md xs:h-14 h-32 sm:p-4 " placeholder="Your Message">
					</div>
				</div>
			</div>

			<button style="background: #8460E5;" class="bg-purple-600 xs:w-full text-white font-bold text-sm items-center  px-3 py-2  lg:w-1/2 2xl:w-1/3 rounded-2xl xs:p-5">Send Now</button>
		</div>
	</div>




	<div class="grid xl:grid-cols-6 sm:pt-16 sm:grid-cols-2 md:grid-cols-3 xs:pt-16 xl:pt-10 md:pt-12 px-10">

		<div class="bg-white xl:pt-12 ">
			<img src="http://localhost/ci/assets/5.0.png" class="pb-4 xs:w-1/4">
			<span class="text-sm">
				High Volume API for SEO companies, data mining services, and SEO Tool Suite as a SaaS..</span>
			<br><span class="font-normal text-sm p-20"><br>
				Follow us</span><br>
			<div class="inline-flex xl:w-6 xl:space-x-1 md:space-x-2 xs:w-5 float-left sm:w-6 ">
				<img src="http://localhost/ci/assets/4.9.png">
				<img src="http://localhost/ci/assets/4.8.png">
			</div>
		</div>



		<div class="xl:bg-white "></div>

		<div class="bg-white xs:pt-12 ">
			<div class="flex flex-col space-y-5 text-center">

				<div style="color: #8460E5;" class="font-bold text-xl text-purple-600">Search API</div>
				<div class="text-sm">Google API</div>
				<div class="text-sm">Bing API</div>
				<div class="text-sm">Yahoo API</div>

			</div>
		</div>

		<div class="bg-white xs:pt-12 ">
			<div class="flex flex-col space-y-5 text-center">

				<div style="color: #8460E5;" class="font-bold text-purple-600 text-xl">Features</div>
				<div class="text-sm">SERP Type</div>
				<div class="text-sm">Mobile & Desktop</div>
				<div class="text-sm">Locations</div>
				<div class="text-sm">SERP Parsing</div>

			</div>
		</div>
		<div class="bg-white">
			<div class="bg-white  xs:pt-12">
				<div class="flex flex-col space-y-5 text-center">

					<div style="color: #8460E5;" class="font-bold text-purple-600 text-xl">Company</div>
					<div class="text-sm"> Integrations</div>
					<div class="text-sm">Use Case</div>
					<div class="text-sm">Statuss</div>

				</div>
			</div>
		</div>
		<div class="bg-white-300 xs:pt-12">
			<div class="bg-white">
				<div class="bg-white ">
					<div class="flex flex-col space-y-5 text-center">

						<div style="color: #8460E5;" class="font-bold text-purple-600 text-xl">Help & Support</div>
						<div class="text-sm">Contact Us</div>
						<div class="text-sm">Blog</div>
						<div class="text-sm">FAQs</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="lg:flex sm:text-center pt-16 flex-row px-10 justify-between">
		<div class="xs:pb-4 xs:text-center text-sm">Copyright ©2021 SERPHouse.</div>
		<div class="flex 2xl:pr-20  md:space-x-6 sm:place-content-evenly flex-row-reverse;">
			<div class="text-sm">Terms & Conditions</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Privacy Policy</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Licenses</div>
		</div>
	</div>
	</div>

	<br>

</body>

</html>


<style>
	/* .accordion-content {
    transition: max-height 0.3s ease-out, padding 0.3s ease;
    } */
</style>

<script>
	const accordionHeader = document.querySelectorAll(".accordion-header");
	accordionHeader.forEach((header) => {
		header.addEventListener("click", function() {
			const accordionContent = header.parentElement.querySelector(".accordion-content");
			let accordionMaxHeight = accordionContent.style.maxHeight;

			// Condition handling
			if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
				accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 150}px`;
				header.querySelector(".fas").classList.remove("fa-plus");
				header.querySelector(".fas").classList.add("fa-minus");
				header.parentElement.classList.add("bg-white");
			} else {
				accordionContent.style.maxHeight = `0px`;
				header.querySelector(".fas").classList.add("fa-plus");
				header.querySelector(".fas").classList.remove("fa-minus");
				header.parentElement.classList.remove("bg-white");
			}
		});
	});
</script>




<style>
	div.accordion-content {
		display: none;
	}

	div.accordion-content.show {
		display: block !important;
	}
</style>

<script>
	var acc = document.getElementsByClassName("accordion-header");
	var panel = document.getElementsByClassName('accordion-content');

	for (var i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			var setClasses = !this.classList.contains('active');
			setClass(acc, 'active', 'remove');
			setClass(panel, 'show', 'remove');

			if (setClasses) {
				this.classList.toggle("active");
				this.nextElementSibling.classList.toggle("show");
			}
		}
	}

	function setClass(els, className, fnName) {
		for (var i = 0; i < els.length; i++) {
			els[i].classList[fnName](className);
		}
	}
</script>


<script>
	const answer = document.getElementById("copyResult");
	const copy = document.getElementById("copyButton");
	const selection = window.getSelection();
	const range = document.createRange();
	const textToCopy = document.getElementById("textToCopy")

	copy.addEventListener('click', function(e) {
		range.selectNodeContents(textToCopy);
		selection.removeAllRanges();
		selection.addRange(range);
		const successful = document.execCommand('copy');
		if (successful) {
			answer.innerHTML = 'Copied!';
		} else {
			answer.innerHTML = 'Unable to copy!';
		}
		window.getSelection().removeAllRanges()
	});
</script>
