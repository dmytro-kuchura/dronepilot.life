@extends('layouts.email')

@section('content')
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
            <td bgcolor="#1e2035" align="center" style="padding: 0 15px 0 15px;" class="section-padding">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <!-- Begin Content -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                               bgcolor="#ffffff">
                                            <tr>
                                                <td align="center"
                                                    style="font-size: 35px; font-family: Montserrat, Arial, sans-serif; color: #2c304d; padding-top: 30px;"
                                                    class="padding-copy">Подписка оформлена!
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Content -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Begin Button -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                               class="mobile-button-container" bgcolor="#ffffff">
                                            <tr>
                                                <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                    <table border="0" cellspacing="0" cellpadding="0"
                                                           class="responsive-table">
                                                        <tr>
                                                            <td align="center"><a href="#" target="_blank"
                                                                                  style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #5d5386; border-top: 15px solid #5d5386; border-bottom: 15px solid #5d5386; border-left: 35px solid #5d5386; border-right: 35px solid #5d5386; border-radius: 35px; -webkit-border-radius: 35px; -moz-border-radius: 35px; display: inline-block;"
                                                                                  class="mobile-button">Отписаться</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Button -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Begin Content -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                               bgcolor="#ffffff">
                                            <tr>
                                                <td align="center"
                                                    style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Noto Sans, Arial, sans-serif; color: #aea9c3;"
                                                    class="padding-copy">Спасибо за подписку на новости и рассылку!
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Content -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
