@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="content">
            <!-- Table components -->
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 padding">
                        <h3 class="text-center"> Income and Expense - Profit / Loss</h3>
                        <div class="col-lg-8 offset-lg-3">
                            <!-- insite menu start-->
                            <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
                                <li class="nav-item">
                                    <a href="{{ route('income-expense.overview') }}" class="nav-link active">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('income-expense.ledger') }}" class="nav-link">Ledger Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('income.index') }}" class="nav-link">Income</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('expense.index') }}" class="nav-link">Expense</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="true">Cataagorical</a>
                                    <div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
                                        style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -46px);">
                                        <a href="cataagorical.html" class="dropdown-item">Cataagorical</a>
                                        <a href="cataagorical.html" class="dropdown-item">Debts</a>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            <!-- insite menu end-->
                        </div>
                    </div>
                    <table class="table table-xs table-bordered table-responsive w-50 m-auto">
                        <thead>
                            <tr style="background-color:rgb(58, 60, 61) ">
                                <th class="text-white text-center"> Month </th>
                                <th class="text-white text-center"> Income </th>
                                <th class="text-white text-center"> Expenses </th>
                                <th class="text-white text-center"> Profit/Loss </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Jan</td>
                                <td class="text-center"> {{ $incomeJanuaryAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseJanuaryAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeJanuaryAmount->sum() - $expenseJanuaryAmount->sum() }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Feb</td>
                                <td class="text-center"> {{ $incomeFebruaryAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseFebruaryAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeFebruaryAmount->sum() - $expenseFebruaryAmount->sum() }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Mar</td>
                                <td class="text-center"> {{ $incomeMarchAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseMarchAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeMarchAmount->sum() - $expenseMarchAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Apr </td>
                                <td class="text-center"> {{ $incomeAprilAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseAprilAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeAprilAmount->sum() - $expenseAprilAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">May </td>
                                <td class="text-center"> {{ $incomeMayAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseMayAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeMayAmount->sum() - $expenseMayAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Jun </td>
                                <td class="text-center"> {{ $incomeJuneAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseJuneAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeJuneAmount->sum() - $expenseJuneAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Jul </td>
                                <td class="text-center"> {{ $incomeJulyAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseJulyAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeJulyAmount->sum() - $expenseJulyAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Aug </td>
                                <td class="text-center"> {{ $incomeAugustAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseAugustAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeAugustAmount->sum() - $expenseAugustAmount->sum() }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Sep </td>
                                <td class="text-center"> {{ $incomeSeptemberAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseSeptemberAmount->sum() }}</td>
                                <td class="text-center">
                                    {{ $incomeSeptemberAmount->sum() - $expenseSeptemberAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Oct </td>
                                <td class="text-center"> {{ $incomeOctoberAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseOctoberAmount->sum() }}</td>
                                <td class="text-center">{{ $incomeOctoberAmount->sum() - $expenseOctoberAmount->sum() }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Nov </td>
                                <td class="text-center"> {{ $incomeNovemberAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseNovemberAmount->sum() }}</td>
                                <td class="text-center">
                                    {{ $incomeNovemberAmount->sum() - $expenseNovemberAmount->sum() }}</td>
                            </tr>
                            <tr>
                                <td class="text-center">Dec </td>
                                <td class="text-center"> {{ $incomeDecemberAmount->sum() }}</td>
                                <td class="text-center">{{ $expenseDecemberAmount->sum() }}</td>
                                <td class="text-center">
                                    {{ $incomeDecemberAmount->sum() - $expenseDecemberAmount->sum() }}</td>
                            </tr>
                        </tbody>
                        @php
                            $profitLossTotal = $incomeJanuaryAmount->sum() - $expenseJanuaryAmount->sum() + ($incomeFebruaryAmount->sum() - $expenseFebruaryAmount->sum()) + ($incomeMarchAmount->sum() - $expenseMarchAmount->sum()) + ($incomeAprilAmount->sum() - $expenseAprilAmount->sum()) + ($incomeMayAmount->sum() - $expenseMayAmount->sum()) + ($incomeJuneAmount->sum() - $expenseJuneAmount->sum()) + ($incomeJulyAmount->sum() - $expenseJulyAmount->sum()) + ($incomeAugustAmount->sum() - $expenseAugustAmount->sum()) + ($incomeSeptemberAmount->sum() - $expenseSeptemberAmount->sum()) + ($incomeOctoberAmount->sum() - $expenseOctoberAmount->sum()) + ($incomeNovemberAmount->sum() - $expenseNovemberAmount->sum()) + ($incomeDecemberAmount->sum() - $expenseDecemberAmount->sum());
                        @endphp
                        <tfoot>
                            <tr style="background-color:rgb(108, 113, 116)">
                                <th class="text-center">Total </th>
                                <th class="text-center">{{ $incomesTotalAmount }}</th>
                                <td class="text-center">{{ $expensesTotalAmount }}</th>
                                <th class="text-center">{{ $profitLossTotal }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
