    </div>
    </div>

</body>
<script type="text/javascript">
    function change(value){
        $("#IdDeleteUser").val(value);
    }
    function changeEdit(el){
        otro =$(el).parent().parent().children();
        var values = []
        otro.each(function() {
            values.push($( this ).text() )
        });
        
        $("#idEditUser").val(values[0]);
        $("#nombre").val(values[1]);
        $("#apellido").val(values[2]);
        $("#email").val(values[3]);
        if(values[4] == 'administrador'){
            $("#tipo").val(1);
        }else{
            $("#tipo").val(0);
        }
        $("#foto").val(values[5]);
    }

    function changeB(value){
        $("#IdDeleteBook").val(value);
    }
    function changeEditB(el){
        otro =$(el).parent().parent().children();
        var values = []
        otro.each(function() {
            values.push($( this ).text() )
        });
        
        $("#idEditBook").val(values[0]);
        $("#nombreB").val(values[1]);
        $("#autorB").val(values[2]);
        $("#generoB").val(values[3]);
        $("#rateB").val(values[4]);
        $("#descripcionB").val(values[5]);
        $("#precioB").val(values[6]);
        $("#fotoB").val(values[7]);
    }

    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
<script>
    $('#search').on('keypress',function(e) {
    if(e.which == 13) {
         $('#btn-search').click()
        }
    });
    $('#addBook').click(function(){ 
        btn = $('#addBook').text();
        display = $('.overcard2').css('visibility');
        if(display == 'hidden'){
            $('.overcard2').css('visibility','visible');
            $('.options-browse').css('display','flex');
        }
        else{
            $('.overcard2').css('visibility','hidden');
            $('.options-browse').css('display','none');
        }
    });
</script>

</html>                                		                            