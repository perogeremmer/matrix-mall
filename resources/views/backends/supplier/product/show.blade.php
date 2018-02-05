@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <h2 class="hdg">Daftar Produk</h2>
            <div class="bottom-table">
                <div class="bs-docs-example">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>35</td>
                            <td>2011/05/03</td>
                            <td>$163,500.00</td>
                        </tr>
                        <tr>
                            <td>Ashton </td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>45</td>
                            <td>2008/11/28</td>
                            <td>$132,000.00</td>
                        </tr>
                        <tr>
                            <td>Lael </td>
                            <td>Support Lead	</td>
                            <td>Edinburgh	</td>
                            <td>35</td>
                            <td>2005/11/28</td>
                            <td>$182,000.00</td>
                        </tr>
                        <tr>
                            <td>Stevens </td>
                            <td>Sales Assistant</td>
                            <td>New York	</td>
                            <td>30</td>
                            <td>2008/11/28</td>
                            <td>$182,000.00</td>
                        </tr>
                        <tr>
                            <td>Gavin </td>
                            <td>Team Leader	</td>
                            <td>London	</td>
                            <td>21</td>
                            <td>2008/11/28</td>
                            <td>$235,500.00</td>
                        </tr>
                        <tr>
                            <td>Garrett </td>
                            <td>Customer Support	</td>
                            <td>New York	</td>
                            <td>27</td>
                            <td>2008/11/28</td>
                            <td>$112,000.00</td>
                        </tr>
                        <tr>
                            <td>Zenaida </td>
                            <td>Data Coordinator	</td>
                            <td>San Francisco	</td>
                            <td>36</td>
                            <td>2008/11/28</td>
                            <td>$122,000.00</td>
                        </tr>
                        <tr>
                            <td>Michael </td>
                            <td>	Director</td>
                            <td>Singapore	</td>
                            <td>40</td>
                            <td>2008/11/25</td>
                            <td>$192,000.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.table').DataTable();
        });
    </script>
@endsection