<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>order</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap">

        <!-- Font Awesome Solid + Brands -->
        <link href="/fonts/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/fonts/fontawesome/css/brands.css" rel="stylesheet">
        <link href="/fonts/fontawesome/css/solid.css" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body id="pdf">
        <main class="w-full max-w-4xl space-y-4">
            <img id="logo" class="w-32 mx-auto" src="{{ config('app.url') . '/fnt-logo-web-300.png' }}" alt="logo">
            <div class="grid items-start grid-cols-2 gap-4">
                <table class="labelled">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-left">
                                <div class="flex items-center justify-between">
                                    <span>Order Information</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Order #</td>
                            <td>688925</td>
                        </tr>
                        <tr>
                            <td>Ordered</td>
                            <td>2024-09-25 11:58:53</td>
                        </tr>
                                                                        <tr>
                            <td>Transaction ID</td>
                            <td>5MJ613625U1972242</td>
                        </tr>
                                                <tr>
                            <td>Notes</td>
                            <td class="wrap-text"></td>
                        </tr>
                    </tbody>
                </table>

                                <table class="labelled">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-left">
                                <div class="flex items-center justify-between">
                                    <span>Customer Details</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Customer #</td>
                            <td>201659</td>
                        </tr>
                        <tr>
                            <td>Customer Name</td>
                            <td>William Sennick</td>
                        </tr>
                        <tr>
                            <td>Customer Email</td>
                            <td>bsennick@hotmail.com</td>
                        </tr>
                        <tr>
                            <td>Billing Address</td>
                            <td>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>  </div>
                                <div></div>
                                <div></div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="labelled">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-left">
                                <div class="flex items-center justify-between">
                                    <span>Fulfillment</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Status</td>
                            <td>Processing</td>
                        </tr>
                        <tr>
                            <td>Shipping Method</td>
                            <td>UPS - Standard Ground</td>
                        </tr>
                        <tr>
                            <td>Tracking Number</td>
                            <td></td>
                        </tr>
                                            </tbody>
                </table>

                <table class="labelled">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-left">
                                <div class="flex items-center justify-between">
                                    <span>Shipping Address</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>William Sennick</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>bsennick@hotmail.com</td>
                        </tr>
                                                <tr>
                            <td>Address</td>
                            <td>
                                <div>2011  Parks RD</div>
                                <div></div>
                                <div>Benton PA 17814</div>
                                <div>United States</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>570 925 5358</td>
                        </tr>
                    </tbody>
                </table>

                <table class="col-span-2">
                    <colgroup>
                        <col class="w-1/12">
                        <col class="w-9/12">
                        <col class="w-1/12">
                        <col class="w-1/12">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">Quantity</th>
                            <th scope="col">Products Ordered</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                                    <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                RTS Trap Setter
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $62.95
                                    </td>
                                    <td class="text-right">$62.95</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Heavy Duty 6 Gauge J-Hooks - Dozen
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $2.25
                                    </td>
                                    <td class="text-right">$2.25</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            2
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                MB Crunch Proof In-Line Swivels - Dozen
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $6.95
                                    </td>
                                    <td class="text-right">$13.90</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            4
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Freedom Brand Saber-Tooth Drag - Each
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $10.95
                                    </td>
                                    <td class="text-right">$43.80</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                J.C. Conner's T-Bar Shock Springs - Dozen
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $24.95
                                    </td>
                                    <td class="text-right">$24.95</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Aluminum Double Ferrules - 1/16" per 100
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $6.50
                                    </td>
                                    <td class="text-right">$6.50</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                HAGz Spring Clips (Dozen Pack) - Standard
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $14.95
                                    </td>
                                    <td class="text-right">$14.95</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Bucket Organizer
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $16.95
                                    </td>
                                    <td class="text-right">$16.95</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Night Owl Holding Pattern Lure - 1 oz.
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $7.50
                                    </td>
                                    <td class="text-right">$7.50</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Carman's Red Fox Pro-Mix Scent (Pint)
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $11.95
                                    </td>
                                    <td class="text-right">$11.95</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                Night Owl Brush Fire Lure - 1 oz.
                                            </div>
                                                                            </td>
                                    <td class="text-right">
                                        $7.50
                                    </td>
                                    <td class="text-right">$7.50</td>
                                </tr>
                                                                                                                <tr>
                                    <td class="text-center">
                                        <span class="font-semibold text-gray-900">1</span>
                                    </td>
                                    <td>
                                                                                    <div class="font-semibold text-gray-900">
                                                June Coyote Frenzy Lure (1 oz.) -- Value  $7.50
                                            </div>
                                                                            </td>
                                    <td class="text-right">Free</td>
                                    <td class="text-right">Free</td>
                                </tr>
                                                                            <tr>
                            <td colspan="3" class="text-right">
                                <span class="font-semibold text-gray-900">Subtotal</span>
                            </td>
                            <td class="text-right">$213.20</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">
                                <span class="font-semibold text-gray-900">Tax</span>
                            </td>
                            <td class="text-right">$14.29</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">
                                <span class="font-semibold text-gray-900">Shipping</span>
                            </td>
                            <td class="text-right">$24.95</td>
                        </tr>
                                                <tr>
                            <td colspan="3" class="text-right">
                                <span class="font-semibold text-gray-900">Order Total</span>
                            </td>
                            <td class="text-right">$252.44</td>
                        </tr>
                        <tr><td colspan="4"></td></tr>
                                                <tr>
                            <td colspan="3" class="text-right">
                                <span class="font-semibold text-gray-900">
                                    Paypal
                                </span>
                            </td>
                            <td class="text-right">
                                $252.44
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>
