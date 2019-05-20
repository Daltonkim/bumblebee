jQuery(function ($) {


    var eventDelay = 11.5;
    var eventDuration = 1.0;

    var eventElements = document.querySelectorAll(".event");
    var controlElements = document.querySelectorAll(".eventr-control");
    var descriptionElements = document.querySelectorAll(".description");

    var events = Array.prototype.map.call(eventElements, createevent);

    events.forEach(function (event, i) {
        event.next = events[i + 1] || events[0];
        event.duration = eventDuration;
    });

    var currentevent = events[0];
    var autoPlay = TweenLite.delayedCall(eventDelay, setevent);

    TweenLite.set(".works", {
        autoAlpha: 1
    });


    //
    // SET event
    // ===========================================================================
    function setevent(event) {

        autoPlay.restart(true);

        if (event === currentevent) {
            return;
        }

        currentevent.setInactive();
        currentevent = event || currentevent.next;
        currentevent.setActive();
    }

    //
    // CREATE event
    // ===========================================================================
    function createevent(element, index) {

        var control = controlElements[index];
        var description = descriptionElements[index];

        // Public properties and methods for event
        var event = {
            next: null, // will point to the next event object
            duration:1,
            index: index,
            element: element,
            control: control,
            description: description,
            isActive: false,
            setActive: setActive,
            setInactive: setInactive
        };

        if (index === 0) {
            setActive();
        } else {
            setInactive();
        }

        control.addEventListener("click", setevent.bind(null, event));

        function setActive() {
            event.isActive = true;
            control.classList.add("active");
            TweenLite.fromTo(element, event.duration, {
                yPercent: 100
            }, {
                yPercent: 0
            });
            TweenLite.fromTo(description, event.duration, {
                yPercent: -100
            }, {
                yPercent: 0
            });
        }

        function setInactive() {
            event.isActive = false;
            control.classList.remove("active");
            TweenLite.to(element, event.duration, {
                yPercent: -100
            });
            TweenLite.to(description, event.duration, {
                yPercent: 100
            });
        }

        return event;
    }

});