// Adding movie to database
$('#addmovie').submit((e)=>{
    e.preventDefault()    
    form = $('#addmovie')
    formData = form.serialize()
    posterImage = new FormData();
    file = $("#poster")[0].files[0];
    posterImage.append('poster', file)
    $.ajax({
        method: "POST",
        url: "/movie/add?"+formData,
        data: posterImage,
        success:function(response){
            alert(response.message)
            window.location.replace('/movies')
        },

        error: function(){
            alert('An error occured, try again')
        },
        contentType:false,
        processData: false

    })
})