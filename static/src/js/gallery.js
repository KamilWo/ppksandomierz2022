!(function(){
    'use strict';

    var gallery = $('#gallery');

    /* var videos = [
        {
            title: "Video 1",
            url: "video1.mp4",
            video_thumb: "video1.jpg"
        },
        {
            title: "Video 2",
            url: "video2.mp4",
            video_thumb: "video2.jpg"
        },
        {
            title: "Video 3",
            url: "video3.mp4",
            video_thumb: "video3.jpg"
        }
    ];*/

    // if(videos) {
    //     images_data = images_data.concat(videos);
    // }

    if(images_data){
        $.each(images_data, function(index, photo){
            var isVideo = photo.video_thumb ? true : false;
            var img = document.createElement('img');

            img['largeUrl'] = photo.url;
            img['isVideo'] = isVideo;
            img.src = isVideo ? photo.video_thumb : photo.thumb;
            img.title = photo.title;

            var link = document.createElement('a'),
                li = document.createElement('li')
                link.href = img.largeUrl;

                link.appendChild(img);
                if(img.isVideo){
                    link.rel = 'video';
                    li.className = 'video'
                }
                li.appendChild(link);
                gallery[0].appendChild(li);
            // lazy show the photos one by one
            img.onload = function(e){
                img.onload = null;
                li.classList.add('loaded');
            };
        });

        $('#gallery').photobox('a', {thumbs: true}, callback);
        // using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
        setTimeout(window._photobox.history.load, 1000);
        function callback(){};
    }
})();