@extends("app")
@section ("content")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('images/hero_1.jpg')}}');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" style="background: #f3eded;"  >
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-lg-6 mb-5" >
                    @if(Session::has('Success'))
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('Success') }}</p>

                    @endif
                    @if(Session::has('filed'))
                        <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('filed') }}</p>
                    @endif
                    <h2 class="mb-4">Mon profil</h2>

                    <form action="{{Route('deposer')}}" method="POST" class="p-4 border rounded" id="registration" name="registration">
                        {{csrf_field()}}

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom *</label>
                                <input type="text" id="nom" name="nom" class="form-control" value="{{$user->nom}}">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" value="{{$user->prenom}}">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email *</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}" >
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Date de Naissance *</label>
                                <input type="date" class="form-control input-date" name="birth" value="{{$user->date_naissance}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Télephone *</label>
                                <input type="text" class="form-control input-date" name="tel" value="{{$user->telephone}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Civilité *</label>
                                <select class="form-control" name="gender">
                                    <option value>Sélectionnez Civilité</option>
                                    <option value="M" @if($user->civilité == "M") selected @endif>M</option>
                                    <option value="Mme" @if($user->civilité == "Mme") selected @endif>Mme</option>
                                    <option value="Mlle" @if($user->civilité == "Mlle") selected @endif>Mlle</option>
                                </select>

                            </div>

                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Gouvernorat *</label>
                                <select class="form-control" name="gender1">
                                    <option value>Sélectionnez Gouvernorat</option>
                                    <option value="Ariana"  @if($user->gouvernorat == "Ariana") selected @endif>Ariana</option>
                                    <option value="Béja"  @if($user->gouvernorat == "Béja") selected @endif>Béja</option>
                                    <option value="Ben Arous"  @if($user->gouvernorat == "Ben Arous") selected @endif>Ben Arous</option>
                                    <option value="Bizerte"  @if($user->gouvernorat == "Bizerte") selected @endif>Bizerte</option>
                                    <option value="Gabès"  @if($user->gouvernorat == "Gabès") selected @endif>Gabès</option>
                                    <option value="Gafsa"  @if($user->gouvernorat == "Gafsa") selected @endif>Gafsa</option>
                                    <option value="Jendouba"  @if($user->gouvernorat == "Jendouba") selected @endif>Jendouba</option>
                                    <option value="Kairouan"  @if($user->gouvernorat == "Kairouan") selected @endif>Kairouan</option>
                                    <option value="Kasserine"  @if($user->gouvernorat == "Kasserine") selected @endif>Kasserine</option>
                                    <option value="Kébili" @if($user->gouvernorat == "Kébili") selected @endif>Kébili</option>
                                    <option value="Le Kef" @if($user->gouvernorat == "Le Kef") selected @endif>Le Kef</option>
                                    <option value="Mahdia" @if($user->gouvernorat == "Mahdia") selected @endif>Mahdia</option>
                                    <option value="La Manouba" @if($user->gouvernorat == "La Manouba") selected @endif>La Manouba</option>
                                    <option value="Médenine" @if($user->gouvernorat == "Médenine") selected @endif>Médenine</option>
                                    <option value="Monastir" @if($user->gouvernorat == "Monastir") selected @endif>Monastir</option>
                                    <option value="Nabeul" @if($user->gouvernorat == "Nabeul") selected @endif>Nabeul</option>
                                    <option value="Sfax" @if($user->gouvernorat == "Sfax") selected @endif>Sfax</option>
                                    <option value="Sidi Bouzid" @if($user->gouvernorat == "Sidi Bouzid") selected @endif>Sidi Bouzid</option>
                                    <option value="Siliana" @if($user->gouvernorat == "Siliana") selected @endif>Siliana</option>
                                    <option value="Sousse" @if($user->gouvernorat == "Sousse") selected @endif>Sousse</option>
                                    <option value="Tataouine" @if($user->gouvernorat == "Tataouine") selected @endif>Tataouine</option>
                                    <option value="Tozeur" @if($user->gouvernorat == "Tozeur") selected @endif>Tozeur</option>
                                    <option value="Tunis" @if($user->gouvernorat == "Tunis") selected @endif>Tunis</option>
                                    <option value="Zaghouan" @if($user->gouvernorat == "Zaghouan") selected @endif>Zaghouan</option>

                                </select>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description </label>
                                <textarea class="form-control" rows="4" cols="57" id="description" name="description">{{$user->description}}</textarea>
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Tags</label>
                                <input type="text" id="exist-values" class="tagged form-control" data-removeBtn="true"
                                       name="skills" value="{{$tags}}" placeholder="Add Platform">
                            </div>
                        </div>







                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="SAUVGARDER" class="btn px-4 btn-primary text-white"
                                >
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-6 col-lg-6">

                    <div class="row">

                        <div class="col-md-12">

                                <div class="col-md-12">
                                    <h2 class="mb-4">Mon CV</h2>
                                    <form action="{{ route('upload_cv1') }}" class="p-4 border rounded" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn px-4 btn-primary text-white">Upload</button>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-12">

                                                <video width="460" height="300" controls>
                                                    <source src="{{asset("cv/videos/".$user->video_cv)}}" type="video/mp4">
                                                    <source src="{{asset("cv/videos/".$user->video_cv)}}" type="video/ogg">
                                                </video>

                                            </div>
                                        </div>
                                    </form>
                                </div>



                        </div>

                    </div>

                </div>

            </div>





        </div>

    </section>

@endsection
@section("script")


    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script>

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 10000);


        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='registration1']").validate({
                // Specify validation rules
                rules: {

                    password: {
                        required: true,
                    },
                    password1: {
                        required: true,
                        minlength: 5
                    },
                    rpassword: {
                        required: true,
                        equalTo : "#password1",
                        minlength: 5
                    },



                },
                // Specify validation error messages
                messages: {

                    password: {
                        required: "Veuillez saisir votre 'actuel Mot de Passe'",

                    },
                    password1: {
                        required: "Veuillez saisir votre 'Nouveau Mot de Passe'",
                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                    },
                    rpassword: {
                        required: "Veuillez confirmé votre 'Mot de Passe'",
                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                    },

                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });



        // https://github.com/k-ivan/Tags
        (function() {

            'use strict';

            // Helpers
            function $$(selectors, context) {
                return (typeof selectors === 'string') ? (context || document).querySelectorAll(selectors) : [selectors];
            }
            function $(selector, context) {
                return (typeof selector === 'string') ? (context || document).querySelector(selector) : selector;
            }
            function create(tag, attr) {
                var element = document.createElement(tag);
                if(attr) {
                    for(var name in attr) {
                        if(element[name] !== undefined) {
                            element[name] = attr[name];
                        }
                    }
                }
                return element;
            }
            function whichTransitionEnd() {
                var root = document.documentElement;
                var transitions = {
                    'transition'       : 'transitionend',
                    'WebkitTransition' : 'webkitTransitionEnd',
                    'MozTransition'    : 'mozTransitionEnd',
                    'OTransition'      : 'oTransitionEnd otransitionend'
                };

                for(var t in transitions){
                    if(root.style[t] !== undefined){
                        return transitions[t];
                    }
                }
                return false;
            }
            function oneListener(el, type, fn, capture) {
                capture = capture || false;
                el.addEventListener(type, function handler(e) {
                    fn.call(this, e);
                    el.removeEventListener(e.type, handler, capture)
                }, capture);
            }
            function hasClass(cls, el) {
                return new RegExp('(^|\\s+)' + cls + '(\\s+|$)').test(el.className);
            }
            function addClass(cls, el) {
                if( ! hasClass(cls, el) )
                    return el.className += (el.className === '') ? cls : ' ' + cls;
            }
            function removeClass(cls, el) {
                el.className = el.className.replace(new RegExp('(^|\\s+)' + cls + '(\\s+|$)'), '');
            }
            function toggleClass(cls, el) {
                ( ! hasClass(cls, el)) ? addClass(cls, el) : removeClass(cls, el);
            }

            function Tags(tag) {

                var el = $(tag);

                if(el.instance) return;
                el.instance = this;

                var type = el.type;
                var transitionEnd = whichTransitionEnd();

                var tagsArray = [];
                var KEYS = {
                    ENTER: 13,
                    COMMA: 188,
                    BACK: 8
                };
                var isPressed = false;

                var timer;
                var wrap;
                var field;

                function init() {

                    // create and add wrapper
                    wrap = create('div', {
                        'className': 'tags-container',
                    });
                    field = create('input', {
                        'type': 'text',
                        'className': 'tag-input',
                        'placeholder': el.placeholder || ''
                    });

                    wrap.appendChild(field);

                    if(el.value.trim() !== '') {
                        hasTags();
                    }

                    el.type = 'hidden';
                    el.parentNode.insertBefore(wrap, el.nextSibling);

                    wrap.addEventListener('click', btnRemove, false);
                    wrap.addEventListener('keydown', keyHandler, false);
                    wrap.addEventListener('keyup', backHandler, false);
                }

                function hasTags() {
                    var arr = el.value.trim().split(',');
                    arr.forEach(function(item) {
                        item = item.trim();
                        if(~tagsArray.indexOf(item)) {
                            return;
                        }
                        var tag = createTag(item);
                        tagsArray.push(item);
                        wrap.insertBefore(tag, field);
                    });
                }

                function createTag(name) {
                    var tag = create('div', {
                        'className': 'tag',
                        'innerHTML': '<span class="tag__name">' + name + '</span>'+
                            '<button class="tag__remove">&times;</button>'
                    });
//       var tagName = create('span', {
//         'className': 'tag__name',
//         'textContent': name
//       });
//       var delBtn = create('button', {
//         'className': 'tag__remove',
//         'innerHTML': '&times;'
//       });

//       tag.appendChild(tagName);
//       tag.appendChild(delBtn);
                    return tag;
                }

                function btnRemove(e) {
                    e.preventDefault();
                    if(e.target.className === 'tag__remove') {
                        var tag  = e.target.parentNode;
                        var name = $('.tag__name', tag);
                        wrap.removeChild(tag);
                        tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
                        el.value = tagsArray.join(',')
                    }
                    field.focus();
                }

                function keyHandler(e) {

                    if(e.target.tagName === 'INPUT' && e.target.className === 'tag-input') {

                        var target = e.target;
                        var code = e.which || e.keyCode;

                        if(field.previousSibling && code !== KEYS.BACK) {
                            removeClass('tag--marked', field.previousSibling);
                        }

                        var name = target.value.trim();

                        // if(code === KEYS.ENTER || code === KEYS.COMMA) {
                        if(code === KEYS.ENTER) {

                            target.blur();

                            addTag(name);

                            if(timer) clearTimeout(timer);
                            timer = setTimeout(function() { target.focus(); }, 10 );
                        }
                        else if(code === KEYS.BACK) {
                            if(e.target.value === '' && !isPressed) {
                                isPressed = true;
                                removeTag();
                            }
                        }
                    }
                }
                function backHandler(e) {
                    isPressed = false;
                }

                function addTag(name) {

                    // delete comma if comma exists
                    name = name.toString().replace(/,/g, '').trim();

                    if(name === '') return field.value = '';

                    if(~tagsArray.indexOf(name)) {

                        var exist = $$('.tag', wrap);

                        Array.prototype.forEach.call(exist, function(tag) {
                            if(tag.firstChild.textContent === name) {

                                addClass('tag--exists', tag);

                                if(transitionEnd) {
                                    oneListener(tag, transitionEnd, function() {
                                        removeClass('tag--exists', tag);
                                    });
                                } else {
                                    removeClass('tag--exists', tag);
                                }


                            }

                        });

                        return field.value = '';
                    }

                    var tag = createTag(name);
                    wrap.insertBefore(tag, field);
                    tagsArray.push(name);
                    field.value = '';
                    el.value += (el.value === '') ? name : ',' + name;
                }

                function removeTag() {
                    if(tagsArray.length === 0) return;

                    var tags = $$('.tag', wrap);
                    var tag = tags[tags.length - 1];

                    if( ! hasClass('tag--marked', tag) ) {
                        addClass('tag--marked', tag);
                        return;
                    }

                    tagsArray.pop();

                    wrap.removeChild(tag);

                    el.value = tagsArray.join(',');
                }

                init();

                /* Public API */

                this.getTags = function() {
                    return tagsArray;
                }

                this.clearTags = function() {
                    if(!el.instance) return;
                    tagsArray.length = 0;
                    el.value = '';
                    wrap.innerHTML = '';
                    wrap.appendChild(field);
                }

                this.addTags = function(name) {
                    if(!el.instance) return;
                    if(Array.isArray(name)) {
                        for(var i = 0, len = name.length; i < len; i++) {
                            addTag(name[i])
                        }
                    } else {
                        addTag(name);
                    }
                    return tagsArray;
                }

                this.destroy = function() {
                    if(!el.instance) return;

                    wrap.removeEventListener('click', btnRemove, false);
                    wrap.removeEventListener('keydown', keyHandler, false);
                    wrap.removeEventListener('keyup', keyHandler, false);

                    wrap.parentNode.removeChild(wrap);

                    tagsArray = null;
                    timer = null;
                    wrap = null;
                    field = null;
                    transitionEnd = null;

                    delete el.instance;
                    el.type = type;
                }
            }

            window.Tags = Tags;

        })();

        // Use
        var tags = new Tags('.tagged');

        document.getElementById('get').addEventListener('click', function(e) {
            e.preventDefault();
            alert(tags.getTags());
        });
        document.getElementById('clear').addEventListener('click', function(e) {
            e.preventDefault();
            tags.clearTags();
        });
        document.getElementById('add').addEventListener('click', function(e) {
            e.preventDefault();
            tags.addTags('New');
        });
        document.getElementById('addArr').addEventListener('click', function(e) {
            e.preventDefault();
            tags.addTags(['Steam Machines', 'Nintendo Wii U', 'Shield Portable']);
        });
        document.getElementById('destroy').addEventListener('click', function(e) {
            e.preventDefault();
            if(this.textContent === 'destroy') {
                tags.destroy();
                this.textContent = 'reinit';
            } else {
                this.textContent = 'destroy';
                tags = new Tags('.tagged');
            }

        });



    </script>


@endsection
