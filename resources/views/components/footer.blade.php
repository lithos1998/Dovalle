<footer>
    <div class="footer-logo">
        <img src="/assets/img/logotipo.png">
    </div>
    
    <script>
        fetch('http://carlosriveros.online/api/signature')
        .then(response => response.json())
        .then(data => {
            document.getElementById('signature').innerHTML = data.signature;
        })
    </script>  

    <div id="signature" class="developed-by"></div>  
</footer>