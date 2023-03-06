@extends('admin.master')
@section('content')
<div class="container-fluid mt-1 mb-1">
    <div>
      <h4 class="text-center mb-0" style="color: #117A8B;"><strong>Sales Achievement Summary</strong></h4>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="d-flex justify-content-between text-white p-3 mb-2" style="background-color: #117A8B;">
          <span>FY - {{ date('Y') }}</span>
          <span>Team Sales & Peformance Dashboard</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <thead class="gridjs-thead text-white text-center" style="background-color: #117A8B;">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Total</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Q1</div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Q2</div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Q3</div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Q4</div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Total</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody text-center">
                    <tr class="gridjs-tr ">
                      <td data-column-id="name" class="gridjs-td border ">Target</td>
                      <td data-column-id="email" class="gridjs-td border">{{$sales_year_target->quarter_one_target}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border">{{$sales_year_target->quarter_two_target}}</td>
                      <td data-column-id="country" class="gridjs-td border">{{$sales_year_target->quarter_three_target}}</td>
                      <td data-column-id="name" class="gridjs-td border border-top border-bottom">{{$sales_year_target->quarter_four_target}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border border-top border-bottom">{{$sales_year_target->year_target}}</td>
                    </tr>
                    {{-- <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="gridjs-td border">{{$q1_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border">{{$q2_quoted_amount}}</td>
                      <td data-column-id="country" class="gridjs-td border">{{$q3_quoted_amount}}</td>
                      <td data-column-id="name" class="gridjs-td border border-top border-bottom">{{$q4_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border border-top border-bottom">{{$q1_quoted_amount+$q2_quoted_amount+$q3_quoted_amount+$q4_quoted_amount}}</td>
                    </tr> --}}
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Achieved</td>
                      <td data-column-id="email" class="gridjs-td border">{{$q1_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border">{{$q2_quoted_amount}}</td>
                      <td data-column-id="country" class="gridjs-td border">{{$q3_quoted_amount}}</td>
                      <td data-column-id="name" class="gridjs-td border border-top border-bottom">{{$q4_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border border-top border-bottom">{{$total_quoted_amount}}</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr class=" text-white" style="background-color: #117A8B;">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Percentage</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white text-center">

                            {{( $q1_quoted_amount/($sales_year_target->quarter_one_target)) * 100}} %
                        </div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content text-white text-center">
                            {{($q2_quoted_amount/($sales_year_target->quarter_two_target)) * 100}} %
                        </div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white text-center">
                            {{($q3_quoted_amount/($sales_year_target->quarter_three_target)) * 100}} %
                        </div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white text-center">
                            {{($q4_quoted_amount/($sales_year_target->quarter_four_target)) * 100}} %
                        </div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white text-center">
                            {{($total_quoted_amount/($sales_year_target->year_target)) * 100}} %
                        </div>
                      </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12">
        <div class="text-center text-white p-3 mb-2" style="background-color: #117A8B;">
          <span>Deficiencies</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr text-white" style="background-color: #117A8B;" >
                      <th data-column-id="name" class="text-center" colspan="2">
                        <div class="gridjs-th-content text-white">STATUS</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody text-center">
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Status</td>
                      <td data-column-id="name" class="gridjs-td border text-black fw-bolder">
                        @if (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 100)
                        Outstanding
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 90)
                        Outstanding
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 80)
                        Performer
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 70)
                        Performer
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 60)
                        Good
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 50)
                        Fair
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 40)
                        Not Good
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 30)
                        Bad Performer
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 20)
                        Very Bad
                        @elseif (($total_quoted_amount/($sales_year_target->year_target)) * 100 > 10)
                        Worst
                        @else
                        Worst
                        @endif
                      </td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Differences</td>
                      <td data-column-id="name" class="gridjs-td border text-black fw-bolder">
                        {{($sales_year_target->year_target) - $total_quoted_amount}}
                      </td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Ratio</td>
                      <td data-column-id="name" class="gridjs-td border text-black fw-bolder">{{($total_quoted_amount/($sales_year_target->year_target)) * 100}} %</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="text-center text-white p-3 mb-2" style="background-color: #117A8B;">
          <span>Performance Vs. Incentive</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table text-center text-white" style="height: auto;background-color: #117A8B;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th border-end">
                        <div class="gridjs-th-content text-white">TARGET</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th ">
                        <div class="gridjs-th-content text-white">{{$sales_year_target->year_target}}</div>
                      </th>
                    </tr>
                  </thead>
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th border-end">
                        <div class="gridjs-th-content text-white">Achievement</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">{{$total_quoted_amount}}</div>
                      </th>
                    </tr>
                  </thead>
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th border-end">
                        <div class="gridjs-th-content text-white">Ratio</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">{{($total_quoted_amount/($sales_year_target->year_target)) * 100}} %</div>
                      </th>
                    </tr>
                  </thead>

                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-1 mb-5">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="text-center text-white p-3 mb-2" style="background-color: #117A8B;">
          <span>FY{{ date('Y') }} -Q1</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <tbody class="gridjs-tbody">
                    <tr class="gridjs-tr text-center text-white" style="background-color: #117A8Ba6;">
                      <td data-column-id="name" class="gridjs-td text-white" style="background-color: #117A8B;" rowspan="2">FY - {{date('Y')}}</td>
                      <td data-column-id="email" class="text-white gridjs-td border" colspan="3">Q1</td>
                      <td data-column-id="email" class="text-white gridjs-td border" colspan="3">Q2</td>
                      <td data-column-id="email" class="text-white gridjs-td border" colspan="3">Q3</td>
                      <td data-column-id="name" class="text-white gridjs-td border-top border-bottom" colspan="3">Q4</td>

                    </tr>
                    <tr class="gridjs-tr text-center text-white" style="background-color: #117A8Ba6;">
                      <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Achieved</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Achieved</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Achieved</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="text-white gridjs-td border">Achieved</td>
                    </tr>

                    @foreach ($sales_managers as $item)
                        <tr class="gridjs-tr text-center">
                          <td data-column-id="email" class="gridjs-td border">{{$item->name}}</td>
                          <td data-column-id="email" class="gridjs-td border"></td>
                          <td data-column-id="email" class="gridjs-td border">2,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">3,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">4,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">5,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">8,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">70,000</td>
                          <td data-column-id="email" class="gridjs-td border">-</td>
                          <td data-column-id="email" class="gridjs-td border">-</td>
                          <td data-column-id="email" class="gridjs-td border">6,000,000</td>
                          <td data-column-id="email" class="gridjs-td border">-</td>
                          <td data-column-id="email" class="gridjs-td border">-</td>
                        </tr>
                    @endforeach

                  </tbody>
                  {{-- <tfoot>
                    <tr class=" text-white" style="background-color: #117A8B;">
                      <td data-column-id="email" class="gridjs-td "></td>
                      <td data-column-id="email" class="gridjs-td border">7,500</td>
                      <td data-column-id="email" class="gridjs-td border">48,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">38,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">4,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">5,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">8,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">70,000</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">6,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                    </tr>
                  </tfoot> --}}
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="text-center text-white p-3 mb-2" style="background-color: #117A8B;">
          <span>Total</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr text-white" style="background-color: #117A8B;">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Total</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Quoted</div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Achieved</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody">
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">27,000</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">27,000</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">27,000</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Value</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Value</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Value</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">6,6600</td>
                      <td data-column-id="email" class="gridjs-td">0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                    </tr>
                  </tbody>
                  <tfoot class="text-white" style="background-color: #117A8B;">
                    <tr class="">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content text-white">#Value</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">48,880</div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content text-white">48,880</div>
                      </th>

                    </tr>
                  </tfoot>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

