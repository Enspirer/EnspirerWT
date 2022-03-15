<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rrweb@latest/dist/rrweb.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/rrweb@latest/dist/rrweb.min.js"></script>

<script>
    let events = [];

    rrweb.record({
        emit(event) {
            // push event into the events array
            events.push(event);
        },
    });

    // this function will send events to the backend and reset the events array
    function save() {
        const widget_details = {
          'widget_id' : '1',
          'product_id' : '2'
        };

        const body = JSON.stringify({ events ,widget_details});

        events = [];
        fetch('http://localhost:8000/api/session_rec', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body
        });
    }

    // save events every 10 seconds
    setInterval(save, 10 * 1000);
</script>