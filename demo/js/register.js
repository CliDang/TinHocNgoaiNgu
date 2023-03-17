$(document).ready(function() {
    $('#btnRegister').click(function() {
        var examdate = $('#examdate').val();
        var examlevel = document.getElementById("examid");
        var selectedOption = examlevel.options[examlevel.selectedIndex];
        var optionLabel = selectedOption.label;
        var name = $('#name').val();
        var birthday = $('#birthday').val();
        var sex = $('#sex').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        $.ajax({
            url: 'register-Controller.php',
            type: 'post',
            data: {examdate: examdate, examlevel: optionLabel, name: name, birthday: birthday, sex: sex, phone: phone, email: email},
            success: function(response) {
                alert(response);
                // var notic = $('#notic');
                // alert(notic);
                // notic.append(h);
            }
        })
    })
})