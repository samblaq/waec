var dcsObject, imageViewer;
    
    function onInitSuccess(videoViewerId, imageViewerId) {
        dcsObject = dynamsoft.dcsEnv.getObject(videoViewerId);
        imageViewer = dcsObject.getImageViewer(imageViewerId);
        dcsObject.videoviewer.setMode(dcsObject.videoviewer.EnumMode.Document);
        dcsObject.videoviewer.setAllowCaptureUndetectedDocument(true);

        var cameraList = dcsObject.camera.getCameraList();
        if (cameraList.length > 0) {
            dcsObject.camera.takeCameraOwnership(cameraList[0]);
            dcsObject.camera.playVideo();
        } else {
            alert('No camera is connected.');
        }
    }

    function onInitFailure(errorCode, errorString) {
        alert('Init failed: ' + errorString);
    }

    dynamsoft.dcsEnv.init(
        'dcsVideoContainer', 'dcsImageContainer', onInitSuccess, onInitFailure);

    function CaptureDocument(){
        if (!dcsObject) return;
        dcsObject.camera.captureDocument('dcsImageContainer');
    }

    window.onbeforeunload = function() {
        if (dcsObject) dcsObject.destroy();
    };