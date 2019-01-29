var arrow_down = document.getElementById('dropdown_arrow');


function filter_dropdown() {
    document.getElementsByClassName('filter_container')[0].style.height = '5vh';
    document.getElementById('dropdown_arrow').style.transform = 'rotate(180deg)';
    document.querySelector('filter_buttons').style.display = 'block';
}