@extends('layouts.default')

@section('content')
    <div class="md:flex flex-nowrap max-w-md md:max-w-full mx-auto">
        <div class="hidden md:flex flex-shrink items-center justify-end w-1/3 bg-gray-normal py-auto relative min-h-140">
            <div class="bg-primary rounded-full w-128 h-128 flex-shrink-0 flex items-center place-content-center absolute -right-24">
                <svg width="237px" height="300px" viewBox="0 0 237 300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="01_main" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="1.1-Get-started" transform="translate(-231.000000, -323.000000)" fill="#FFFFFF">
                            <g id="image" transform="translate(0.000000, 72.000000)">
                                <g id="Group-5" transform="translate(92.000000, 143.000000)">
                                    <path d="M375.503621,246.736727 L327.294781,246.736727 C326.439922,239.748598 324.608117,232.914034 321.85264,226.4318 C317.910016,217.022118 312.023246,208.545258 304.575484,201.552954 C296.652173,194.181884 287.350523,188.436984 277.200862,184.645794 C265.603946,180.329721 253.303619,178.197193 240.925389,178.356657 L186.979353,178.356657 L186.979353,246.736727 L163.06344,246.736727 L163.06344,154.441601 L240.925389,154.441601 C256.27028,154.273491 271.512397,156.954646 285.872224,162.347944 C298.941808,167.25305 310.908279,174.686853 321.082217,184.221073 C330.897662,193.477841 338.67854,204.663887 343.93265,217.071604 C344.768641,219.064525 345.571849,221.041111 346.227528,223.050368 L371.323664,223.050368 C369.891082,217.83803 368.116938,212.724956 366.012659,207.744078 C359.471685,192.320125 349.793526,178.414763 337.58895,166.905527 C325.139841,155.2278 310.500869,146.112793 294.510802,140.082766 C294.150178,139.935747 293.756771,139.805064 293.379755,139.674381 L293.379755,108 L269.611371,108 L269.611371,133.091206 C261.621533,131.654626 253.533018,130.829998 245.416794,130.624558 L245.416794,108 L221.615626,108 L221.615626,130.526545 L139,130.526545 L139,270.406752 L173.423177,270.406752 L173.423177,270.406752 L186.930177,270.406752 L186.930177,338.819494 L240.925389,338.819494 C253.241027,338.972139 265.475249,336.810829 276.987766,332.44868 C287.180033,328.566534 296.520805,322.752859 304.493524,315.329159 C311.958916,308.316615 317.852288,299.810458 321.787072,290.368636 C324.473914,283.986587 326.282489,277.271797 327.163645,270.406752 L351.325437,270.406752 C350.299485,280.464923 347.791898,290.317546 343.883474,299.647155 C338.652819,312.120101 330.870472,323.369457 321.033041,332.677375 C310.848567,342.201834 298.908079,349.668702 285.872224,354.664852 C271.544346,360.200032 256.291565,362.971758 240.925389,362.832562 L163.06344,362.832562 L163.06344,294.223795 L139,294.223795 L139,386.682276 L221.615626,386.682276 L221.615626,408 L245.400402,408 L245.400402,386.567928 C253.525118,386.38628 261.621806,385.550452 269.611371,384.068609 L269.611371,408 L293.379755,408 L293.379755,377.420093 C293.822339,377.256738 294.264922,377.126055 294.691114,376.946365 C310.608364,370.81564 325.181978,361.667834 337.605342,350.009257 C349.850364,338.439205 359.53215,324.445167 366.029051,308.925674 C372.710789,292.969771 376.100255,275.83648 375.997742,258.547237 L375.997742,257.942826 C375.997742,254.21835 375.798677,250.444868 375.503621,246.736727 Z M303.859345,257.198118 C303.97641,264.965964 302.491501,272.675936 299.495239,279.857508 C296.835343,286.309538 292.799925,292.118672 287.664032,296.888968 C281.835698,302.219795 275.017056,306.382236 267.585826,309.145712 C258.765984,312.429744 249.397149,314.033137 239.974144,313.871204 L209.657712,313.871204 L209.657712,200.656295 L239.974144,200.656295 C249.507956,200.509838 258.987088,202.106325 267.93429,205.365379 C275.25977,208.038423 281.976826,212.120614 287.697219,217.376004 C292.818398,222.136622 296.857016,227.919846 299.54502,234.341832 C302.526188,241.382664 303.995346,248.959189 303.859345,256.591023 L303.859345,257.198118 Z" id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="md:w-2/3 z-10 bg-gray-light flex-none md:pl-52 pt-12 md:pt-0 pt-18 md:pt-0 md:my-20 mx-7 md:mx-0">
            {{ $slot }}
        </div>
    </div>
@endsection
