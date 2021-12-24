(function () {
    var HOST = "http://bangun-ruang.test/pages/admin/upload.php"

    addEventListener("trix-attachment-add", function (event) {
        if (event.attachment.file) {
            uploadFileAttachment(event.attachment)
            console.log(event.attachment)
        }
    })

    function uploadFileAttachment(attachment) {
        uploadFile(attachment.file, setProgress, setAttributes)

        function setProgress(progress) {
            attachment.setUploadProgress(progress)
        }

        function setAttributes(attributes) {
            attachment.setAttributes(attributes)
        }
    }

    function uploadFile(file, progressCallback, successCallback) {
        var formData = createFormData(file)
        var xhr = new XMLHttpRequest()

        xhr.open("POST", HOST, true)

        xhr.upload.addEventListener("progress", function (event) {
            var progress = event.loaded / event.total * 100
            progressCallback(progress)
        })

        xhr.addEventListener("load", function (event) {
            
            var attributes = {
                url: "http://bangun-ruang.test/pages/admin/uploads/"+ file.name,
                href: "http://bangun-ruang.test/pages/admin/uploads/"+ file.name,
                height: 412,
                width:732
            }
            successCallback(attributes)
        })

        xhr.send(formData)
    }

    function createFormData(file) {
        var data = new FormData()
        data.append("Content-Type", file.type)
        data.append("file", file)
        return data
    }
})();