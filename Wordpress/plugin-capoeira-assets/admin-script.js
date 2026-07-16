jQuery(document).ready(function($){
    var custom_uploader;

    $('.capoeira-upload-button').click(function(e) {
        e.preventDefault();

        var button = $(this);
        var wrapper = button.closest('.image-upload-wrapper');
        var input_field = wrapper.find('.cap-img-url');
        var image_preview = wrapper.find('img');
        var remove_button = wrapper.find('.capoeira-remove-button');

        // Se o uploader já existir, abra-o
        if (custom_uploader) {
            custom_uploader.open();
            // Precisamos atualizar o alvo sempre que clicamos num botão novo
            custom_uploader.off('select');
            custom_uploader.on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                input_field.val(attachment.url);
                image_preview.attr('src', attachment.url).show();
                remove_button.show();
            });
            return;
        }

        // Estende wp.media objeto
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Escolha a imagem',
            button: {
                text: 'Usar esta imagem'
            },
            multiple: false
        });

        // Quando a imagem é selecionada, roda uma callback.
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            input_field.val(attachment.url);
            image_preview.attr('src', attachment.url).show();
            remove_button.show();
        });

        custom_uploader.open();
    });

    $('.capoeira-remove-button').click(function(e) {
        e.preventDefault();
        var button = $(this);
        var wrapper = button.closest('.image-upload-wrapper');
        var input_field = wrapper.find('.image-url-input');
        var image_preview = wrapper.find('.image-preview');

        input_field.val('');
        image_preview.attr('src', '').hide();
        button.hide();
    });
});
