/* js/script.js */
$(document).ready(function () {
    const tabIcons = {
        "Learning": "files/images/DL-learning.svg",
        "Technology": "files/images/DL-technology.svg",
        "Communication": "files/images/DL-communication.svg"
    };


    fetchSliders();

    function fetchSliders() {
        $.getJSON("fetch.php", function (data) {
            $('#tabList').empty();
            $('#carouselInner').empty();
            $('#mobileAccordion').empty();

            data.forEach((item, index) => {
                const icon = tabIcons[item.tab_name] || 'icons/default.svg';

                // Desktop tab
                const tabCard = $(
                    `<div class="tab-card ${index === 0 ? 'active' : ''}" data-index="${index}" role="button">
            <div class="tab-inner">
              <img src="${icon}" alt="${item.tab_name}">
              <span>${item.tab_name}</span>
              <div class="arrow-right ${index === 0 ? 'show' : ''}"></div>
            </div>
          </div>`
                );

                tabCard.on('click', function () {
                    $('#sliderContent').carousel(index);
                    $('.tab-card').removeClass('active');
                    $('.arrow-right').removeClass('show');
                    $(this).addClass('active');
                    $(this).find('.arrow-right').addClass('show');
                });

                $('#tabList').append(tabCard);

                // Desktop carousel
                $('#carouselInner').append(`
          <div class="carousel-item ${index === 0 ? 'active' : ''}" data-image="images/${item.image}" data-index="${index}">
            <div class="carousel-caption d-none d-md-block">
              <div class="badge bg-secondary mb-2">DIGITAL LEARNING INFRASTRUCTURE</div>
              <h2 class="text-white fw-bold">${item.title}</h2>
              <p>${item.description}</p>
              <a href="#" class="learn-more">Learn More →</a>
            </div>
          </div>`);

                // Mobile accordion
                $('#mobileAccordion').append(`
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="${index === 0}" aria-controls="collapse${index}">
                <img src="${icon}" style="width: 24px; margin-right: 8px;"> ${item.tab_name}
              </button>
            </h2>
            <div id="collapse${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" data-bs-parent="#mobileAccordion">
              <div class="accordion-body text-white" style="background-image: url('images/${item.image}'); background-size: cover; background-position: center;">
                <div class="badge bg-secondary mb-2">DIGITAL LEARNING INFRASTRUCTURE</div>
                <h2 class="fw-bold">${item.title}</h2>
                <p>${item.description}</p>
                <a href="#" class="learn-more">Learn More →</a>
              </div>
            </div>
          </div>`);
            });

            updatePreview($('#carouselInner .carousel-item.active').data('image'));

            $('#sliderContent').on('slid.bs.carousel', function () {
                let active = $('#carouselInner .carousel-item.active').data('image');
                let index = $('#carouselInner .carousel-item.active').data('index');
                updatePreview(active);
                $('.tab-card').removeClass('active');
                $('.arrow-right').removeClass('show');
                $(`.tab-card[data-index='${index}']`).addClass('active');
                $(`.tab-card[data-index='${index}'] .arrow-right`).addClass('show');
            });
        });
    }

    function updatePreview(imageSrc) {
        $('#previewImage').attr('src', imageSrc);
    }

    $('#sliderForm').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        let id = $('#sliderId').val();
        $.ajax({
            url: id ? 'update.php' : 'add.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                alert(res === 'success' ? 'Saved!' : 'Error!');
                $('#sliderForm')[0].reset();
                $('#sliderId').val('');
                fetchSliders();
            }
        });
    });

    $('#resetForm').on('click', function () {
        $('#sliderForm')[0].reset();
        $('#sliderId').val('');
    });
});
