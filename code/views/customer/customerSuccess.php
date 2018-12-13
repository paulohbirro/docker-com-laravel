<script>
    swal("Gravado com sucesso!");
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];    
 setTimeout(function () {
       window.location.href = baseUrl; //will redirect to your blog page (an ex: blog.html)
    }, 2000); //will call the function after 2 secs.
</script>

    


