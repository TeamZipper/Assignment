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
            <label><b>Destination Airport</b></label>
            <select id="arrivalAirport" name = "arrivalAirport" >
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
        if (document.getElementById('departureAirport').value === document.getElementById('arrivalAirport').value) {
            alert('Cannot arrive and depart at the same airport');
            return;
        }
        if (document.getElementById('arrivalAirport').value === "default") {
            alert('Must choose arrival airport');
            return;
        }
        document.getElementById('submit').type = submit;
    }
</script>