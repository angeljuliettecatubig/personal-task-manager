document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | Delete Confirmation Modal
    |--------------------------------------------------------------------------
    */

    const modal = document.getElementById('delete-modal');

    if (modal) {

        const cancelBtn = document.getElementById('delete-cancel');
        const confirmBtn = document.getElementById('delete-confirm');

        let formToSubmit = null;


        // Open confirmation modal when Delete is clicked
        document.querySelectorAll('.delete-form').forEach(function (form) {

            form.addEventListener('submit', function (event) {

                event.preventDefault();

                formToSubmit = form;

                modal.classList.add('active');

            });

        });


        // Cancel deletion
        if (cancelBtn) {

            cancelBtn.addEventListener('click', function () {

                formToSubmit = null;

                modal.classList.remove('active');

            });

        }


        // Confirm deletion
        if (confirmBtn) {

            confirmBtn.addEventListener('click', function () {

                if (formToSubmit) {

                    const form = formToSubmit;

                    formToSubmit = null;

                    modal.classList.remove('active');

                    form.submit();

                }

            });

        }


        // Close when clicking outside the modal
        modal.addEventListener('click', function (event) {

            if (event.target === modal) {

                formToSubmit = null;

                modal.classList.remove('active');

            }

        });


        // Close with Escape key
        document.addEventListener('keydown', function (event) {

            if (event.key === 'Escape') {

                formToSubmit = null;

                modal.classList.remove('active');

            }

        });

    }

});