<!DOCTYPE html>
<html>
<head>
    <title>Auto verkoop Form</title>
    {{ csrf_field() }}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2>Auto verkoop formulier</h2>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('car.store')}}">
                @csrf
                <div class="form-group">
                    <label for="autoForm">Auto-Merk</label>
                    <input type="text" id="merk" name="merk">
                </div>
                <div class="form-group">
                    <label for="autoForm">Model Naam</label>
                    <input type="text" id="handelbenaming" name="handelsbenaming">
                </div>
                <div class="form-group">
                    <label for="autoForm">Voer kenteken in</label>
                    <input type="text" id="kenteken" name="kenteken">
                </div>
                <div>
                    <label for="autoForm">Beschrijving</label>
                    <textarea id="beschrijving" name="beschrijving"></textarea>
                </div>
                <div class="form-group">
                    <label for="autoForm">Is er gerookt in de auto?</label>
                    <input type="checkbox" id="auto_rook" name="auto_rook">
                </div>
                <div class="form-group">
                    <label for="autoForm">Prijs</label>
                    <input type="text" id="prijs" name="prijs">
                </div>
                <div class="form-group">
                    <label for="autoForm">Vermogen in PK</label>
                    <input type="text" id="vermogen_in_pk" name="vermogen_in_pk">
                </div>
                <div class="form-group">
                    <label for="autoForm">Vermogen in KW</label>
                    <input type="text" id="vermogen_in_kw" name="vermogen_in_kw">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
