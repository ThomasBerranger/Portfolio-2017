<!DOCTYPE html>
<html class=''>
<head>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'>

    </script>
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">


    <link rel="shortcut icon" type="image/x-icon"
          href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="canonical" href="https://codepen.io/qkevinto/pen/WQVNWO?editors=0110"/>

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Unica+One'>
    <style class="cp-pen-styles">* {
            box-sizing: border-box;
        }

        .container {
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5rem;
        }

        .heading {
            color: white;
            text-transform: uppercase;
            text-align: center;
        }
    </style>

</head>
<body>
<div class="container">
    <h1 class="heading" data-target-resolver></h1>
</div>
<script>"use strict";

    var resolver = {
        resolve: function resolve(options, callback) {
            // The string to resolve
            var resolveString = options.resolveString || options.element.getAttribute('data-target-resolver');
            var combinedOptions = Object.assign({}, options, {resolveString: resolveString});

            function getRandomInteger(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            };

            function randomCharacter(characters) {
                return characters[getRandomInteger(0, characters.length - 1)];
            };

            function doRandomiserEffect(options, callback) {
                var characters = options.characters;
                var timeout = options.timeout;
                var element = options.element;
                var partialString = options.partialString;

                var iterations = options.iterations;

                setTimeout(function () {
                    if (iterations >= 0) {
                        var nextOptions = Object.assign({}, options, {iterations: iterations - 1});

                        // Ensures partialString without the random character as the final state.
                        if (iterations === 0) {
                            element.textContent = partialString;
                        } else {
                            // Replaces the last character of partialString with a random character
                            element.textContent = partialString.substring(0, partialString.length - 1) + randomCharacter(characters);
                        }

                        doRandomiserEffect(nextOptions, callback);
                    } else if (typeof callback === "function") {
                        callback();
                    }
                }, options.timeout);
            };

            function doResolverEffect(options, callback) {
                var resolveString = options.resolveString;
                var characters = options.characters;
                var offset = options.offset;
                var partialString = resolveString.substring(0, offset);
                var combinedOptions = Object.assign({}, options, {partialString: partialString});

                doRandomiserEffect(combinedOptions, function () {
                    var nextOptions = Object.assign({}, options, {offset: offset + 1});

                    if (offset <= resolveString.length) {
                        doResolverEffect(nextOptions, callback);
                    } else if (typeof callback === "function") {
                        callback();
                    }
                });
            };

            doResolverEffect(combinedOptions, callback);
        }
    };

    /* Some GLaDOS quotes from Portal 2 chapter 9: The Part Where He Kills You
     * Source: http://theportalwiki.com/wiki/GLaDOS_voice_lines#Chapter_9:_The_Part_Where_He_Kills_You
     */
    var strings = ['Thomas Berranger'];

    var counter = 0;

    var options = {
        // Initial position
        offset: 0,
        // Timeout between each random character
        timeout: 50,
        // Number of random characters to show
        iterations: 10,
        // Random characters to pick from
        characters: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'x', '#', '%', '&', '-', '+', '_', '?', '/', '\\', '='],
        // String to resolve
        resolveString: strings[counter],
        // The element
        element: document.querySelector('[data-target-resolver]')
    };

    // Callback function when resolve completes
    function callback() {
        setTimeout(function () {
            counter++;

            if (counter >= strings.length) {
                counter = 0;
            }

            var nextOptions = Object.assign({}, options, {resolveString: strings[counter]});
            resolver.resolve(nextOptions, callback);
        }, 1000);
    }

    resolver.resolve(options, callback);
    //# sourceURL=pen.js
</script>
</body>
</html>