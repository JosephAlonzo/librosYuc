    </div>
    </div>

</body>

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