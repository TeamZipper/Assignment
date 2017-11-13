<!-- css reference: https://www.w3schools.com/w3css/w3css_tables.asp -->
<style>

    .zebra caption{
        font-size:20px;
        font-weight:normal;
        padding-top: 20px;
        height:50px;}

    #container{
        padding-top:20px;
        width:960px;
        margin:0 auto;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width:100%;
        -webkit-box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
        box-shadow:  0px 2px 1px 5px rgba(242, 242, 242, 0.1);
    }

    .zebra {
        border: 1px solid #555;
    }

    .zebra td {
        border-left: 1px solid #555;
        border-top: 1px solid #555;
        padding: 10px;
        text-align: center;
    }

    .zebra th, .zebra th:hover {
        border-left: 1px solid #555;
        border-bottom: 1px solid #828282;
        padding: 20px;
        background-color:#151515 !important;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#151515), to(#404040)) !important;
        background-image: -webkit-linear-gradient(top, #151515, #404040) !important;
        background-image:    -moz-linear-gradient(top, #151515, #404040) !important;
        background-image:     -ms-linear-gradient(top, #151515, #404040) !important;
        background-image:      -o-linear-gradient(top, #151515, #404040) !important;
        background-image:         linear-gradient(top, #151515, #404040) !important;
        color:#fff !important;
        font-weight:normal;
    }

    .zebra tbody tr:nth-child(even) {
        background: #000 !important;
        color:#fff;
    }

    .zebra tr:hover *{
        background: #eeeeee;
        color:#000;
    }

    .zebra tr {
        background:#404040;
        color:#fff;
    }
</style>

<div id="container">
    <table class="zebra">
        <caption>Current Airlines Information</caption>
        <thead>
        <tr>
            <th>Flight</th>
            <th>Scheduled time</th>
            <th>Estimated time</th>
            <th>Airline</th>
            <th>To</th>
            <th>Terminal</th>
            <th>Gate</th>
            <th></th>
            <!--    <th>Status</th> -->
        </tr>
        </thead>
        <tbody>
        {airlines}
        <tr>
            <td><a href="/info/show/{flight}" title="Status: {status}">{flight}</a></td>
            <td>{scheduled}</td>
            <td>{estimated}</td>
            <td>{airline}</td>
            <td>{to}</td>
            <td>{terminal}</td>
            <td>{gate}</td>
            <td><a href="flights/edit/{flight}"><button class="btn">Edit</button></a><a href="flights/delete/{flight}"><button class="btn">Delete</button></a></td>
        </tr>
        {/airlines}
        </tbody>
    </table>
</div>