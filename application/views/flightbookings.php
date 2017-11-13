<div class="row">
    <form action="FlightBookings/matchFlights" method="post">

        <div class="form-group col-md-5">
            <label><b>Departure Airport</b></label>
            <select id="departureAirport" name = "departureAirport" >
                <option value="default">Choose Airport</option>
                {airlines}
                <option value={id}>{id}</option>
                {/airlines}
            </select>
        </div>
        <div class="form-group col-md-5">
            <label><b>Destination Airport / First Stop</b></label>
            <select id="arrivalAirport1" name = "arrivalAirport1" >
                <option value="default">Choose Airport</option>
                {airlines}
                <option value={id}>{id}</option>
                {/airlines}
            </select>
        </div>
        <div class="form-group col-md-5">
            <label><b>Destination Airport / Second Stop</b></label>
            <select id="arrivalAirport2" name = "arrivalAirport2" >
                <option value="default">Choose Airport</option>
                {airlines}
                <option value={id}>{id}</option>
                {/airlines}
            </select>
        </div>
        <div class="form-group col-md-5">
            <label><b>Destination Airport</b></label>
            <select id="arrivalAirport3" name = "arrivalAirport3" >
                <option value="default">Choose Airport</option>
                {airlines}
                <option value={id}>{id}</option>
                {/airlines}
            </select>
        </div>
        <div class="form-group col-md-5">
            <button id="submit" type="button" class="btn btn-primary pull-right" onclick="displayVals(event)">Show</button>
        </div>
    </form>

</div>

<script>
    function displayVals(event) {
        if (document.getElementById('departureAirport').value === "default") {
            alert('Must choose departure airport');
            return;
        }
        if (document.getElementById('departureAirport').value === document.getElementById('arrivalAirport1').value) {
            alert('Cannot arrive and depart at the same airport');
            return;
        }
        if (document.getElementById('arrivalAirport1').value === "default") {
            alert('Must choose arrival airport');
            return;
        }
        if (document.getElementById('arrivalAirport1').value !== "default" && document.getElementById('arrivalAirport2').value !== "default"
                && document.getElementById('arrivalAirport1').value === document.getElementById('arrivalAirport2').value) {
            alert('Cannot arrive and depart at the same airport');
            return;
        }
        if (document.getElementById('arrivalAirport2').value !== "default" && document.getElementById('arrivalAirport3').value !== "default"
                && document.getElementById('arrivalAirport2').value === document.getElementById('arrivalAirport3').value) {
            alert('Cannot arrive and depart at the same airport');
            return;
        }
        document.getElementById('submit').type = submit;
    }
</script>