

// انتخاب المان‌های مورد نیاز
var toggleButton = document.getElementById('nav_list');
var myElement = document.querySelector('.menu ul');

// اضافه و حذف کلاس با زدن دکمه
toggleButton.addEventListener('click', function() {
    myElement.classList.toggle('add_class');
});

var myDiv = document.getElementById('myDiv');

// بررسی وجود کلاس "has-image"
if (myDiv.classList.contains('has-image')) {
    var image = document.createElement('img');
    image.src = 'path/to/your/image.jpg';
    myDiv.appendChild(image);
}