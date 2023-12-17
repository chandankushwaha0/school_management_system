
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

        function handleUserPopup() {
            const userName = document.querySelector('.user-name');
            userName.addEventListener('click', function() {
                const userPopup = document.querySelector('.user-popup');
                userPopup.classList.toggle('show-user-popup');
            });
        }

        function handleMessage() {
        const messageSection = document.querySelector('.message-section');
        messageSection.addEventListener('click', function() {
            const messagePopup = document.querySelector('.message-popup');
            messagePopup.classList.toggle('show-message-popup');
        });
    }

        function handleNotification() {
        const notificationSection = document.querySelector('.notification-section');
        notificationSection.addEventListener('click', function() {
            const notificationPopup = document.querySelector('.notification-popup');
            notificationPopup.classList.toggle('show-notification-popup')
        });
    }

    const searchByName = () => {
        const filterData =document.querySelector( '.searchName' ).value.toUpperCase();

        const table = document.getElementById('smsTable');

        const tr = table.getElementsByTagName('tr');

        for( var i = 0; i < tr.length; i++ ) {
            const td = tr[i].getElementsByTagName('td')[1];

            if( td ) {
                const textValue = td.textContent || td.innerHTML ;
                
                if( textValue.toUpperCase().indexOf( filterData ) > -1 ) {
                    tr[1].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    } 

    function handleAddNewRoutine() {
        const routineBtn = document.querySelector('.add-routine');
        const routineSection = document.querySelector('.main-routine');
    
        if (routineBtn && routineSection) {
            routineBtn.addEventListener('click', function() {
                routineSection.style.display = 'flex';
                document.body.classList.add('no-scroll');
                console.log('hello');
            });
    
            const routineCloseBtn = document.querySelector('.routine_close');
            if (routineCloseBtn) {
                routineCloseBtn.addEventListener('click', function() {
                    routineSection.style.display = 'none';
                    document.body.classList.remove('no-scroll');
                    console.log('hello');
                });
            }
        } 
    }
    
    // Call the function when the DOM is ready
    document.addEventListener('DOMContentLoaded', handleAddNewRoutine);


    document.addEventListener('DOMContentLoaded', function() {
        const addNewExamRoutineBtn = document.querySelector('.add-exam-routine');
        const examRoutineArea = document.querySelector('.exam-routine');
    
        if (addNewExamRoutineBtn && examRoutineArea) {
            addNewExamRoutineBtn.addEventListener('click', function() {
                examRoutineArea.style.display = 'block';
                document.body.classList.add('no-scroll');
            });
    
            const closeExamRoutineBtn = document.querySelector('.exam-routine-close');
            if (closeExamRoutineBtn) {
                closeExamRoutineBtn.addEventListener('click', function() {
                    examRoutineArea.style.display = 'none';
                    document.body.classList.remove('no-scroll');
                });
            }
        } 
    });


    function handleEditProfileSection() {
        const cancelEditBtn = document.querySelector('.cancel-edit');
        const editProfileSection = document.querySelector('.edit-profile-section');
    
        // Add a click event listener to the "cancel-edit" element
        cancelEditBtn.addEventListener('click', function() {
            // Hide the "edit-profile" section when the button is clicked
            editProfileSection.style.display = 'none';
        });
    }


        document.addEventListener('DOMContentLoaded', function() {
            const myProfileLink = document.querySelector('.my-profile-btn');
            const profilePopup = document.querySelector('.profile-popup');
        
            // Add a click event listener to the "My Profile" link
            myProfileLink.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default link behavior (e.g., navigating to a new page)
                profilePopup.style.display = 'block';
            });
        });

        //handle edit profile btns
        document.addEventListener('DOMContentLoaded', function() {
            const editProfileBtn = document.querySelector('.edit-my-profile');
            editProfileBtn.addEventListener('click', function() {
                const editProfileSection = document.querySelector('.edit-profile-section');
                editProfileSection.style.display = 'block';
            });
        });

        //handle profile section
        document.addEventListener('DOMContentLoaded', function() {
            const closeProfileSecBtn = document.querySelector('.close-profile-popup');
            closeProfileSecBtn.addEventListener('click', function() {
                const profilePopup = document.querySelector('.profile-popup');
                profilePopup.style.display = 'none';
            })
        })


        document.addEventListener('DOMContentLoaded', function () {
            var menuLinks = document.querySelectorAll('#menu a');
        
            menuLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                e.preventDefault();

                // Get the href attribute of the clicked link
                var page = this.getAttribute('href');
                console.log(page);
                
                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();
                
                // Configure the GET request
                xhr.open('POST', page, true);

                // Define the callback function for a successful response
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // Replace the content of #content-container with the loaded content
                        document.getElementById('content-container').innerHTML = xhr.responseText;
                    } else {
                        // Handle errors if necessary
                        alert('Error loading content.');
                    }
                };

                // Send the GET request
                xhr.send();
            });
        });
    });

        window.addEventListener('load', function() {
            handleUserPopup();
            handleMessage();
            handleNotification();
            handleEditProfileSection();
        });

