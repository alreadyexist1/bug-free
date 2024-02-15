
document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        var name = document.querySelector('input[name="name"]').value;
        var email = document.querySelector('input[name="email"]').value;
        var phone = document.querySelector('input[name="phone"]').value;
        var gender = document.querySelector('input[name="gender"]:checked');
        var department = document.querySelector('input[name="department"]').value;

        var errorMessage = '';

        if (name.trim() === '') {
            errorMessage += 'Name cannot be empty.\n';
        }

        if (email.trim() === '') {
            errorMessage += 'Email cannot be empty.\n';
        }

        if (phone.trim() === '') {
            errorMessage += 'Phone cannot be empty.\n';
        }

        if (!gender) {
            errorMessage += 'Please select a gender.\n';
        }

        if (department.trim() === '') {
            errorMessage += 'Department cannot be empty.\n';
        }

        if (errorMessage !== '') {
            alert(errorMessage);
            event.preventDefault(); // Prevent form submission
        }
    });
});
