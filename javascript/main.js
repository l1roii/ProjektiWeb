document.addEventListener("DOMContentLoaded",

        function(event) {
            const BtnSubmit = document.getElementById('submit');
            const validate = (event) => {

                const emri = document.getElementById('user_name');
                const mbiemri = document.getElementById('user_lastname');
                const email = document.getElementById('user_email');
                const password = document.getElementById('user_password');
                if (emri.value === "") {
                    alert("Please write your name");
                    emri.focus();
                    return false;
                }
                if (mbiemri.value === "") {
                    alert("Please write your lastname");
                    mbiemri.focus();
                    return false;
                }
                if (email.value === "") {
                    alert("Please write your email");
                    email.focus();
                    return false;
                }
                if (password.value === "") {
                    alert("Please write your passwowrd");
                    password.focus();
                    return false;
                }
                if (!emailValid(email.value)) {
                    alert("Ju lutem te shtoni email'in valid.");
                    email.focus();
                    return false;
                }
                return true;
            }
            const emailValid = (email) => {
                const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
                return emailRegex.test(email.toLowerCase());

            }
            BtnSubmit.addEventListener('click', validate);
        });





        document.addEventListener("DOMContentLoaded",

        function(event) {
            const BtnSubmit = document.getElementById('submit');
            const validate = (event) => {

                const email = document.getElementById('email');
                const password = document.getElementById('password');
                if (email.value === "") {
                    alert("Please write your email");
                    email.focus();
                    return false;
                }
                if (password.value === "") {
                    alert("Please write your passwowrd");
                    password.focus();
                    return false;
                }
                if (!emailValid(email.value)) {
                    alert("Ju lutem te shtoni email'in valid.");
                    email.focus();
                    return false;
                }
                return true;
            }
            const emailValid = (email) => {
                const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
                return emailRegex.test(email.toLowerCase());

            }
            BtnSubmit.addEventListener('click', validate);
        });