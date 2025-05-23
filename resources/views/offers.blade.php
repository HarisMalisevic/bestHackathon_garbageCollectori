@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="row pb-4">
                <h2 class="mb-3">Offers</h2>
                <div class="col-9">
                    <div style="max-height: 40vh; overflow-y: auto;">
                        <table class="table transakcije-tabela table-hover">
                            <thead>
                                <tr>
                                    <th onclick="sortTable(0)" style="cursor:pointer;">Partner</th>
                                    <th onclick="sortTable(1)" style="cursor:pointer;">Tokens needed</th>
                                    <th onclick="sortTable(2)" style="cursor:pointer;">Discount (%)</th>
                                    <th onclick="sortTable(3)" style="cursor:pointer;">Active</th>
                                    <th onclick="sortTable(4)" style="cursor:pointer;">Referral Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($partner->offers as $offer)
                                    <tr>
                                        <td>{{ $offer->partner->name }}</td>
                                        <td>{{ $offer->amount }}</td>
                                        <td>{{ $offer->discount_percentage }}</td>
                                        <td>
                                            @if ($offer->active)
                                                <img src="{{ asset('images/activated.png') }}" alt="Active" width="20px">
                                            @else
                                            <img src="{{ asset('images/not-activated.png') }}" alt="Active" width="20px">
                                            @endif

                                        </td>
                                        <td>
                                            @if ($userCodes->contains('offer_id', $offer->id))
                                                {{ $userCodes->where('offer_id', $offer->id)->first()->code }}
                                            @else
                                                <img src="{{ asset('images/not-generated.png') }}" alt="Active" width="20px">
                                            
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$userCodes->contains('offer_id', $offer->id))
                                                <form action="{{ route('offers.store', ['offer' => $offer->id]) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-secondary">Generate code</button>
                                                </form>
                                            @else
                                                Code generated
                                            <!--TREBA GA GREY OUTATI DA SE NE KLIKA-->
                                               
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
        </div>
    </div>

    <script>
         function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.querySelector("table");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x && y && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x && y && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
@endsection
