document.body.firstChild.data = "";
window.addEventListener('load', function () {


    var description = document.getElementById("description");
    var button = document.getElementById("hamburger");
    var menu = document.getElementById("menu");
    button.addEventListener('click', function () {
        console.log(menu.classList.contains('hidden'));

        // menu.classList.toggle('hidden');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            menu.classList.add('show');
            description.classList.remove('show');
            description.classList.add('hidden'); 
        } else {
            menu.classList.remove('show');
            menu.classList.add('hidden');
            description.classList.remove('hidden');
            description.classList.add('show'); 
        }
    })
})
