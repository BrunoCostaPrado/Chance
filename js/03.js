$(document).ready(function() {

    let containerA = document.getElementById("circleA");

    let circleA = new progressBar.circle(containerA, {

        color: '#18A0FB',
        strokeWidth: 8,
        duration: 1400,
        from: {
            color: '#AAA'
        },
        to: { color: '#18A0FB' },

        step: function(state, circle) {
            circle.path.stAttribute('stroke', state.color);
            let value = Math.round(circle.value() * 60);
            circle.setText(Value);
        }

    });

    $(document).ready(function() {

        let containerB = document.getElementById("circleB");

        let circleB = new progressBar.circle(containerB, {

            color: '#18A0FB',
            strokeWidth: 8,
            duration: 1600,
            from: {
                color: '#AAA'
            },
            to: { color: '#18A0FB' },

            step: function(state, circle) {
                circle.path.stAttribute('stroke', state.color);
                let value = Math.round(circle.value() * 254);
                circle.setText(Value);
            }

        });
    });

    $(document).ready(function() {

        let containerC = document.getElementById("circleC");

        let circleC = new progressBar.circle(containerC, {

            color: '#18A0FB',
            strokeWidth: 8,
            duration: 2000,
            from: {
                color: '#AAA'
            },
            to: { color: '#18A0FB' },

            step: function(state, circle) {
                circle.path.stAttribute('stroke', state.color);
                let value = Math.round(circle.value() * 32);
                circle.setText(Value);
            }

        });
    });

    $(document).ready(function() {

        let containerD = document.getElementById("circleD");

        let circleD = new progressBar.circle(containerD, {

            color: '#18A0FB',
            strokeWidth: 8,
            duration: 2400,
            from: {
                color: '#AAA'
            },
            to: { color: '#18A0FB' },

            step: function(state, circle) {
                circle.path.stAttribute('stroke', state.color);
                let value = Math.round(circle.value() * 5243);
                circle.setText(Value);
            }

        });
    });

    let dataAreaOffset = $('#data-area').offset();
    let stop = 0;
    $(window).scroll(function(e) {

        let scroll = $(window).scroll.top();

        if (scroll > (dataAreaOffset.top - 500) && stop == 0) {


            circleA.animate(1.0);
            circleB.animate(1.0);
            circleC.animate(1.0);
            circleD.animate(1.0);

            stop = 1;

        }



    });


});