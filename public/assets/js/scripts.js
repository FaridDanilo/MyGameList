//SLIDER IMG START
const slides = document.querySelectorAll('.slideshow-container > div');
const prevBtn = document.querySelector('.prev-slide');
const nextBtn = document.querySelector('.next-slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

showSlide(currentSlide);

if (nextBtn && prevBtn) {
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
}

setInterval(nextSlide, 9000);
// SLIDER IMG END

//SELECTED PLATFORM START
document.querySelectorAll('.platform input[type="checkbox"]').forEach(input => {
    input.addEventListener('change', function () {
        this.closest('.platform').classList.toggle('active', this.checked);
    });
});
//SELECTED PLATFORM END

// DROPDOWN-MENU START
document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('open'));
        this.parentElement.classList.toggle('open');
    });
});

document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('open'));
});
// DROPDOWN-MENU END

// DROPZONE START
function setupDropzone(dropzoneId, inputName, listId, multiple = false) {
    const dropzone = document.getElementById(dropzoneId);
    const fileInput = dropzone.querySelector('input[type="file"]');
    const fileList = document.getElementById(listId);

    // Abrir input al hacer clic en dropzone
    dropzone.addEventListener('click', () => fileInput.click());

    // Mostrar archivos seleccionados
    fileInput.addEventListener('change', () => {
        showFiles(fileInput.files, fileList);
    });

    // Drag & drop listeners
    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('dragover');
    });
    dropzone.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropzone.classList.remove('dragover');
    });
    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('dragover');
        const files = e.dataTransfer.files;
        // Si solo 1 archivo permitido (portada)
        if (!multiple && files.length > 1) {
            fileList.textContent = "Solo puedes seleccionar una imagen";
            return;
        }
        fileInput.files = files;
        showFiles(files, fileList);
    });
}

function showFiles(files, fileList) {
    if (!files.length) {
        fileList.textContent = '';
        return;
    }
    let out = [];
    for (let i = 0; i < files.length; i++) {
        out.push(files[i].name);
    }
    fileList.textContent = out.join(', ');
}

setupDropzone('front-page-drop', 'front_page_img', 'front-page-list');
setupDropzone('enviroments-drop', 'enviroments[]', 'enviroments-list', true);
setupDropzone('mechanics-drop', 'mechanics[]', 'mechanics-list', true);
// DROPZONE END