document.querySelectorAll('button[name="accion"]').forEach(button => {
    button.addEventListener('click', function(){
        document.getElementById('elemento').style.display = 'block';
    });
});