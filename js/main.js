function changeVideo(videoPath, listItem) {
    const videoPlayer = document.getElementById('videoPlayer');
    if (videoPlayer) {
        const sourceElement = videoPlayer.querySelector('source');
        sourceElement.src = videoPath;
        videoPlayer.load(); // Wichtig, um das Video neu zu laden
        videoPlayer.onloadeddata = () => {
            scrollToTop(); // Scrollen zum Anfang der Seite
        };
    }

    updateVideoTitle(listItem);
    highlightListItem(listItem);
}

function scrollToTop() {
    // Scrollt zum Anfang der Seite
    window.scrollTo({top: 0, behavior: 'smooth'});
}

function updateVideoTitle(listItem) {
    if (listItem) {
        const videoTitle = listItem
            .querySelector('.fw-bold')
            .textContent;
        const videoTitleElement = document.getElementById('videoTitle');
        if (videoTitleElement) {
            videoTitleElement.textContent = videoTitle;
        }
    }
}

function highlightListItem(listItem) {
    document
        .querySelectorAll('.list-group-item')
        .forEach(item => {
            item
                .classList
                .remove('highlighted');
        });

    if (listItem) {
        listItem
            .classList
            .add('highlighted');
    }
}

function saveVideoData(url, title, time) {
    const videoData = {
        url,
        title,
        time
    };
    localStorage.setItem('savedVideoData', JSON.stringify(videoData));
}

document.addEventListener('DOMContentLoaded', () => {
    const videoPlayer = document.getElementById('videoPlayer');
    if (videoPlayer) {
        const savedVideoData = JSON.parse(localStorage.getItem('savedVideoData'));
        if (savedVideoData) {
            videoPlayer
                .querySelector('source')
                .src = savedVideoData.url;
            videoPlayer.load();
            const videoTitleElement = document.getElementById('videoTitle');
            if (videoTitleElement) {
                videoTitleElement.textContent = savedVideoData.title;
            }
            videoPlayer.addEventListener('loadedmetadata', () => {
                videoPlayer.currentTime = savedVideoData.time;
            }, {once: true});
        }

        document
            .querySelectorAll('.btn-primary')
            .forEach((button, index) => {
                button.addEventListener('click', () => {
                    const videoPaths = [
                        'videos/video1.mp4',
                        'videos/video2.mp4',
                        'videos/video3.mp4',
                        'videos/video4.mp4',
                        'videos/video5.mp4',
                        'videos/video6.mp4',
                        'videos/video7.mp4',
                        'videos/video8.mp4',
                        'videos/video9.mp4',
                        'videos/video10.mp4'
                        // Fügen Sie hier die Pfade zu weiteren lokalen Videos hinzu
                    ];
                    const listItem = button.closest('.list-group-item');
                    changeVideo(videoPaths[index], listItem);
                });
            });

        videoPlayer.addEventListener('timeupdate', () => {
            const sourceElement = videoPlayer.querySelector('source');
            saveVideoData(
                sourceElement.src,
                document.getElementById('videoTitle').textContent,
                videoPlayer.currentTime
            );
        });
    }

    const menuIcon = document.getElementById('menuIcon');
    const verticalMenu = document.getElementById('verticalMenu');
    let menuIsVisible = false;

    if (menuIcon && verticalMenu) {
        menuIcon.addEventListener('click', () => {
            verticalMenu.style.opacity = '1';
            verticalMenu.style.visibility = 'visible';
            menuIcon.style.visibility = 'hidden';
            menuIsVisible = true;
        });

        verticalMenu.addEventListener('mouseleave', () => {
            verticalMenu.style.opacity = '0';
            verticalMenu.style.visibility = 'hidden';
            menuIcon.style.visibility = 'visible';
            menuIsVisible = false;
        });
    }
});