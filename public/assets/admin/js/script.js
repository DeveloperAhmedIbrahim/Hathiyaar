"use strict"

const url = document.getElementById("url").value;
const success = document.getElementById("success").value;
const info = document.getElementById("info").value;
const warning = document.getElementById("warning").value;
const error = document.getElementById("error").value;

$(".select-picker").selectpicker();

$("#datePicker").datepicker({
    todayHighlight: 1,
    format: "dd/mm/yyyy",
    orientation: isRtl ? "auto right" : "auto left",
})

const toastrConfig = toastr.options = {
    maxOpened: 1,
    autoDismiss: true,
    closeButton: false,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    rtl: false,
    showDuration: 300,
    hideDuration: 1000,
    timeOut: 5000,
    extendedTimeOut: 1000,
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    tapToDismiss: false,
};


window.onload = () => {
    loading(false);
}

const toastrNotification = (type, message) => {
    toastr[type](message);
}

if(success !== '') {
    toastrNotification('success', success);
} else if(info !== '') {
    toastrNotification('info', info);
} else if(warning !== '') {
    toastrNotification('warning', warning);
} else if(error !== '') {
    toastrNotification('error', error);
}

const loading = (status) => {
    let preloader = document.getElementById("preloader");
    if(status === true) {
        preloader.style.display = 'flex';
        setTimeout(function() {
            preloader.style.opacity = 1;
        }, 200);
    } else if(status === false) {
        preloader.style.opacity = 0;
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 200);
    }
}

const clearFormErrors = (form) => {
    const errorFields = form.querySelectorAll('span.error-field');
    errorFields.forEach((errorField) => {
        errorField.innerHTML = '&nbsp;';
    });
}

async function submission(event, route) {
        event.preventDefault();
        loading(true);
        const form = event.target;
        const data = new FormData(form);
        clearFormErrors(form);
        try {
            const response = await fetch(route, {
                headers: {
                    'accept': 'application/json'
                },
                method: 'POST',
                body: data
            });

            const result = await response.json();
            loading(false);

            if (response.ok) {
                if(result.status) {
                    toastrNotification('success', result.data.message);
                    window.location.href = result.data.redirectUrl;
                } else {
                    let errors = result.errors;
                    errors.forEach(error => {
                        document.querySelector(`.error-${error.split(' ')[1]}`).innerText = error;
                    });
                }
            } else {
                toastrNotification('error', result.message);
            }
        } catch (error) {
            console.log(error.message);
        }
}

async function deletetion(model, route, objectId) {
    Swal.fire({
        title: "Are you sure?",
        text: `You won't be able to revert this ${camelToNormal(model)}!`,
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        customClass: {
            confirmButton: "btn btn-primary me-3 waves-effect waves-light",
            cancelButton: "btn btn-label-secondary waves-effect waves-light",
        },
        showClass: { popup: "animate__animated animate__fadeIn" },
        buttonsStyling: !1,
      }).then(async function (t) {
        if(t.value) {
            loading(true);
            try {
                const response = await fetch(route, {
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                    },
                    method: "POST",
                    body: JSON.stringify({
                        _token: document.querySelector("input[name='_token']").value
                    })
                });

                const result = await response.json();
                loading(false);
                if(response.ok) {
                    document.getElementById(objectId).remove();
                    if(result.status) {
                        Swal.fire({
                            icon: "success",
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            customClass: {
                                confirmButton: "btn btn-success waves-effect waves-light",
                            },
                            showClass: { popup: "animate__animated animate__fadeIn" },
                        });
                        toastrNotification('success', result.data.message);
                    } else {
                        toastrNotification('success', result.data.message);
                    }
                } else {
                    toastrNotification('error', result.message);
                }
            } catch(error) {
                console.log(error);
            }
        }
    });
}

async function changeStatus(model, route, objectId) {
    Swal.fire({
        title: "Are you sure?",
        text: `Do you want to change the status of this ${camelToNormal(model)}?`,
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, chnage it!",
        customClass: {
            confirmButton: "btn btn-primary me-3 waves-effect waves-light",
            cancelButton: "btn btn-label-secondary waves-effect waves-light",
        },
        showClass: { popup: "animate__animated animate__fadeIn" },
        buttonsStyling: !1,
      }).then(async function (t) {
        if(t.value) {
            loading(true);
            try {
                const response = await fetch(route, {
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                    },
                    method: "POST",
                    body: JSON.stringify({
                        _token: document.querySelector("input[name='_token']").value
                    })
                });

                const result = await response.json();
                loading(false);
                if(response.ok) {
                    let statusObj = document.getElementById(objectId);
                    statusObj.innerHTML = result.data.value;
                    if(result.data.value === 'Active') {
                        statusObj.classList.remove('bg-label-danger');
                        statusObj.classList.add('bg-label-success');
                    } else {
                        statusObj.classList.remove('bg-label-success');
                        statusObj.classList.add('bg-label-danger');
                    }
                    if(result.status) {
                        Swal.fire({
                            icon: "success",
                            title: "Updated!",
                            text: "User status updated.",
                            customClass: {
                                confirmButton: "btn btn-success waves-effect waves-light",
                            },
                            showClass: { popup: "animate__animated animate__fadeIn" },
                        });
                        toastrNotification('success', result.data.message);
                    } else {
                        toastrNotification('success', result.data.message);
                    }
                } else {
                    toastrNotification('error', result.message);
                }
            } catch(error) {
                console.log(error);
            }
        }
    });
}

const camelToNormal = (text) => {
    const normalText = text
        .replace(/([a-z])([A-Z])/g, '$1 $2')
        .toLowerCase();

    return normalText;
}


if(document.getElementById('text-editor') !== undefined && document.getElementById('text-editor') !== null) {
    const quill = new Quill("#text-editor", {
        bounds: "#text-editor",
        placeholder: "Type Something...",
        modules: {
            formula: !0,
            toolbar: [
                [{ font: [] }, { size: [] }],
                ["bold", "italic", "underline", "strike"],
                [{ color: [] }, { background: [] }],
                [{ script: "super" }, { script: "sub" }],
                [{ header: "1" }, { header: "2" }, "blockquote", "code-block"],
                [
                    { list: "ordered" },
                    { list: "bullet" },
                    { indent: "-1" },
                    { indent: "+1" },
                ],
                [{ direction: "rtl" }],
                ["link", "image", "video", "formula"],
                ["clean"],
            ],
        },
        theme: "snow",
    });

    quill.on('text-change', function(delta, oldDelta, source) {
        $('#description').val(quill.container.firstChild.innerHTML);
    });
}

