
<html>
<head>

</head>
<body>
<input type="text" class="text" id="text" >
<script>
    function paireP() {
        var textp = document.getElementById("text").value ;
        var countleft = 0 ; var countright = 0 ;
        var i = 0 ;
        for ( i = 0 ; i < textp.length ; i++) {
            if (textp[i] === '(') {
                countleft++ ;
            }
        }
        for (i = 0 ; i < textp.length ; i++) {
            if (textp[i] === ')') {
                countright++ ;
            }
        }
        return countright === countleft ;
    }
    function pareb() {
        var textp = document.getElementById("text").value ;
        var countleft = 0 ; var countright = 0 ;
        var i = 0 ;
        for ( i = 0 ; i < textp.length ; i++) {
            if (textp[i] === '<') {
                countleft++ ;
            }
        }
        for (i = 0 ; i < textp.length ; i++) {
            if (textp[i] === '>') {
                countright++ ;
            }
        }
        console.log(countright ) ;
        console.log(countleft) ;

        return countright === countleft ;
    }
    // function autocompleteb() {
    //     var x = event.which || event.keyCode;
    //     var text = document.getElementById('text').value ;
    //     if(x  === 190) {
    //         alert(String.fromCharCode(x));
    //     }
    //     var countright = 0 ; var countleft = 0 ;
    //     for ( i = 0 ; i < textp.length ; i++) {
    //         if (text[i] === '<' ) {
    //             countleft++;
    //         }
    //         if (text[i] === '>') {
    //             countright++ ;
    //         }
    //     }
    // }
    const codetext = document.getElementById('text') ;
    var str = window.getSelection() ;

    // noinspection JSAnnotator
    codetext.addEventListener('focus' , event => {
       event.target.innerText = 'bbbbb' ;
       console.log("bbbbb") ;
       console.log(codetext.innerHTML) ;
       str = window.getSelection() ;
     console.log(str) ;
    });


</script>
<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

</body>
</html>

