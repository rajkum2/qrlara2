<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
        <th>Qrcode Owner Id</th>
        <th>Qrcode Id</th>
        <th>Payment Method</th>
        <th>Amount</th>
        <th>Message</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transactions)
            <tr>
                <td>{{ $transactions->name }}</td>
            <td>{{ $transactions->user_id }}</td>
            <td>{{ $transactions->qrcode_owner_id }}</td>
            <td>{{ $transactions->qrcode_id }}</td>
            <td>{{ $transactions->payment_method }}</td>
            <td>{{ $transactions->amount }}</td>
            <td>{{ $transactions->message }}</td>
            <td>{{ $transactions->status }}</td>
                <td>
                    {!! Form::open(['route' => ['transactions.destroy', $transactions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.show', [$transactions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('transactions.edit', [$transactions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
