@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/prism-coy.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
@endsection

@section('content')
<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></li>
          <li class="breadcrumb-item" aria-current="page">Page</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Dokumentasi API</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Dokumentasi API</h5>
      </div>
      <div class="card-body pb-4">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#credentials">Credentials</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#profile">Profile</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#services">Service List</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#neworder">Create Order</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#checkorder">Check Order Status</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#newrefill">Create Refill</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#checkrefill">Check Refill Status</a>
              </li>
            </ul>
          </div>
          <div class="col-md-9 col-sm-12 mt-4 mt-md-0">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active pb-0" id="credentials" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                      <th>API ID</th>
                      <td>API ID can be found <a href="{{ url('profile/settings') }}">here</a></td>
                    </tr>
                    <tr>
                      <th>API Key</th>
                      <td>API Key can be found <a href="{{ url('profile/settings') }}">here</a></td>
                    </tr>
                    <tr>
                      <th>Secret Key</th>
                      <td>Secret Key can be found <a href="{{ url('profile/settings') }}">here</a></td>
                    </tr>
                    <tr>
                      <th>Static IP</th>
                      <td>Static IP is required, ensure you have whitelisted the IP <a href="{{ url('profile/settings') }}">here</a></td>
                    </tr>
                  </table>
                </div>
                <div class="alert alert-primary mt-3 mb-0">
                  If you have configured the API correctly but are not receiving any response from the API, please ensure that you have whitelisted the IP.
                </div>
              </div>
              <div class="tab-pane fade" id="profile">
                <div class="accordion card" id="profile-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#profileOne">Endpoint</button>
                    </h2>
                    <div id="profileOne" class="accordion-collapse collapse show" data-bs-parent="#profile-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profileTwo">Body</button>
                    </h2>
                    <div id="profileTwo" class="accordion-collapse collapse" data-bs-parent="#profile-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>Parameter</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Mandatory</th>
                              <th>Example</th>
                            </tr>
                            <tr>
                              <td>api_id</td>
                              <td>int</td>
                              <td>Your API ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                            <tr>
                              <td>api_key</td>
                              <td>string</td>
                              <td>Your API Key</td>
                              <td>Yes</td>
                              <td>ABCDxxxxx</td>
                            </tr>
                            <tr>
                              <td>secret_key</td>
                              <td>string</td>
                              <td>Your Secret Key</td>
                              <td>Yes</td>
                              <td>EFGHI</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profileThree">Example responses</button>
                    </h2>
                    <div id="profileThree" class="accordion-collapse collapse" data-bs-parent="#profile-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <th width="50%" class="table-success">Success</th>
                              <th width="50%" class="table-danger">Fail</th>
                            </tr>
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": {
                                  "username": "aditdev.id",
                                  "balance": 109000
                                  }
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false,
                                  "data": {
                                  "msg": "Invalid Request"
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profileFour">List of failed responses</button>
                    </h2>
                    <div id="profileFour" class="accordion-collapse collapse" data-bs-parent="#profile-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="services">
                <div class="accordion card" id="services-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#servicesOne">Endpoint</button>
                    </h2>
                    <div id="servicesOne" class="accordion-collapse collapse show" data-bs-parent="#services-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicesTwo">Body</button>
                    </h2>
                    <div id="servicesTwo" class="accordion-collapse collapse" data-bs-parent="#services-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>Parameter</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Mandatory</th>
                              <th>Example</th>
                            </tr>
                            <tr>
                              <td>api_id</td>
                              <td>int</td>
                              <td>Your API ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                            <tr>
                              <td>api_key</td>
                              <td>string</td>
                              <td>Your API Key</td>
                              <td>Yes</td>
                              <td>f6a9xxxxxx</td>
                            </tr>
                            <tr>
                              <td>secret_key</td>
                              <td>string</td>
                              <td>Your Secret Key</td>
                              <td>Yes</td>
                              <td>aditdev.id</td>
                            </tr>
                            <tr>
                              <td>category_id</td>
                              <td>int</td>
                              <td>Filter Category ID</td>
                              <td>No</td>
                              <td>123</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicesThree">Example responses</button>
                    </h2>
                    <div id="servicesThree" class="accordion-collapse collapse" data-bs-parent="#services-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <th width="50%" class="table-success">Success</th>
                              <th width="50%" class="table-danger">Fail</th>
                            </tr>
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": [
                                  {
                                  "id": 1,
                                  "type": "Default",
                                  "category_id": 1,
                                  "category_name": "Instagram Followers",
                                  "service_name": "Instagram Followers 123",
                                  "price": 50000,
                                  "rate": 1000, // Rate: 1 / 1000
                                  "min": 100,
                                  "max": 200000,
                                  "refill": true,
                                  "description": "Refill 30 days - INSTANT"
                                  }
                                  ]
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false, // true = success, false = fail
                                  "data": {
                                  "msg": "Invalid Request" // message fail
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicesFour">List of failed responses</button>
                    </h2>
                    <div id="servicesFour" class="accordion-collapse collapse" data-bs-parent="#services-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="neworder">
                <div class="accordion card" id="neworder-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#neworderOne">Endpoint</button>
                    </h2>
                    <div id="neworderOne" class="accordion-collapse collapse show" data-bs-parent="#neworder-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderTwo">Body</button>
                    </h2>
                    <div id="neworderTwo" class="accordion-collapse collapse" data-bs-parent="#neworder-accordion">
                      <div class="accordion-body">
                        <div class="accordion card" id="neworderSub-accordion" style="box-shadow: none;">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub1">Default</button>
                            </h2>
                            <div id="neworderSub1" class="accordion-collapse collapse show" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub2">Package</button>
                            </h2>
                            <div id="neworderSub2" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub3">SEO</button>
                            </h2>
                            <div id="neworderSub3" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>keywords</td>
                                      <td>string</td>
                                      <td>Keywords list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub4">Custom Comments</button>
                            </h2>
                            <div id="neworderSub4" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>comments</td>
                                      <td>string</td>
                                      <td>Comments list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub5">Mentions</button>
                            </h2>
                            <div id="neworderSub5" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>usernames</td>
                                      <td>string</td>
                                      <td>Usernames list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub6">Mentions with Hashtags</button>
                            </h2>
                            <div id="neworderSub6" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>usernames</td>
                                      <td>string</td>
                                      <td>Usernames list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                    <tr>
                                      <td>hashtags</td>
                                      <td>string</td>
                                      <td>Hashtags list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub7">Mentions Custom List</button>
                            </h2>
                            <div id="neworderSub7" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>usernames</td>
                                      <td>string</td>
                                      <td>Usernames list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub8">Mentions Hashtag</button>
                            </h2>
                            <div id="neworderSub8" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>hashtag</td>
                                      <td>string</td>
                                      <td>The hashtag you want to send</td>
                                      <td>Yes</td>
                                      <td>#aditdev</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub9">Mentions User Followers</button>
                            </h2>
                            <div id="neworderSub9" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>username</td>
                                      <td>string</td>
                                      <td>Username of the person you want to mention</td>
                                      <td>Yes</td>
                                      <td>aditdev</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub10">Mentions Media Likers</button>
                            </h2>
                            <div id="neworderSub10" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>media</td>
                                      <td>string</td>
                                      <td>Media URL you want to send</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub11">Custom Comments Package</button>
                            </h2>
                            <div id="neworderSub11" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>comments</td>
                                      <td>string</td>
                                      <td>Comments list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev\naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub12">Comment Likes</button>
                            </h2>
                            <div id="neworderSub12" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>username</td>
                                      <td>string</td>
                                      <td>Username of the comment owner</td>
                                      <td>Yes</td>
                                      <td>aditdev</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub13">Poll</button>
                            </h2>
                            <div id="neworderSub13" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>answer_number</td>
                                      <td>int</td>
                                      <td>Answer number of the poll</td>
                                      <td>Yes</td>
                                      <td>1</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub14">Comment Replies</button>
                            </h2>
                            <div id="neworderSub14" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>username</td>
                                      <td>string</td>
                                      <td>Username of the comment owner</td>
                                      <td>Yes</td>
                                      <td>aditdev</td>
                                    </tr>
                                    <tr>
                                      <td>comments</td>
                                      <td>string</td>
                                      <td>Comments list separated by \r\n or \n</td>
                                      <td>Yes</td>
                                      <td>aditdev/naditamagf</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderSub15">Invites from Groups</button>
                            </h2>
                            <div id="neworderSub15" class="accordion-collapse collapse" data-bs-parent="#neworderSub-accordion">
                              <div class="accordion-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                    <tr>
                                      <th>Parameter</th>
                                      <th>Type</th>
                                      <th>Description</th>
                                      <th>Mandatory</th>
                                      <th>Example</th>
                                    </tr>
                                    <tr>
                                      <td>api_id</td>
                                      <td>int</td>
                                      <td>Your API ID</td>
                                      <td>Yes</td>
                                      <td>12345</td>
                                    </tr>
                                    <tr>
                                      <td>api_key</td>
                                      <td>string</td>
                                      <td>Your API Key</td>
                                      <td>Yes</td>
                                      <td>f6a9xxxxxx</td>
                                    </tr>
                                    <tr>
                                      <td>secret_key</td>
                                      <td>string</td>
                                      <td>Your Secret Key</td>
                                      <td>Yes</td>
                                      <td>aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>service</td>
                                      <td>int</td>
                                      <td>Service ID</td>
                                      <td>Yes</td>
                                      <td>123</td>
                                    </tr>
                                    <tr>
                                      <td>target</td>
                                      <td>string</td>
                                      <td>Link to page</td>
                                      <td>Yes</td>
                                      <td>https://aditdev.id</td>
                                    </tr>
                                    <tr>
                                      <td>quantity</td>
                                      <td>int</td>
                                      <td>Needed quantity</td>
                                      <td>Yes</td>
                                      <td>1000</td>
                                    </tr>
                                    <tr>
                                      <td>groups</td>
                                      <td>string</td>
                                      <td>Groups list</td>
                                      <td>Yes</td>
                                      <td>aditdev</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderThree">Example responses</button>
                    </h2>
                    <div id="neworderThree" class="accordion-collapse collapse" data-bs-parent="#neworder-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <th width="50%" class="table-success">Success</th>
                              <th width="50%" class="table-danger">Fail</th>
                            </tr>
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": {
                                  "id": 12345,
                                  "price": 23000
                                  }
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false,
                                  "data": {
                                  "msg": "Invalid Request"
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neworderFour">List of failed responses</button>
                    </h2>
                    <div id="neworderFour" class="accordion-collapse collapse" data-bs-parent="#neworder-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                            <tr>
                              <td>Service ID not found</td>
                            </tr>
                            <tr>
                              <td>Service not available</td>
                            </tr>
                            <tr>
                              <td>Invalid order quantity</td>
                            </tr>
                            <tr>
                              <td>Not enough funds on balance</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="checkorder">
                <div class="accordion card" id="checkstatus-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#checkstatusOne">Endpoint</button>
                    </h2>
                    <div id="checkstatusOne" class="accordion-collapse collapse show" data-bs-parent="#checkstatus-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkstatusTwo">Body</button>
                    </h2>
                    <div id="checkstatusTwo" class="accordion-collapse collapse" data-bs-parent="#checkstatus-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>Parameter</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Mandatory</th>
                              <th>Example</th>
                            </tr>
                            <tr>
                              <td>api_id</td>
                              <td>int</td>
                              <td>Your API ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                            <tr>
                              <td>api_key</td>
                              <td>string</td>
                              <td>Your API Key</td>
                              <td>Yes</td>
                              <td>f6a9xxxxxx</td>
                            </tr>
                            <tr>
                              <td>secret_key</td>
                              <td>string</td>
                              <td>Your Secret Key</td>
                              <td>Yes</td>
                              <td>aditdev.id</td>
                            </tr>
                            <tr>
                              <td>id</td>
                              <td>int</td>
                              <td>Order ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkstatusThree">Example responses</button>
                    </h2>
                    <div id="checkstatusThree" class="accordion-collapse collapse" data-bs-parent="#checkstatus-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": {
                                  "id": 12345,
                                  "price": 23000,
                                  "status": "Pending",
                                  "start_count": 232,
                                  "remains": 50000
                                  }
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false,
                                  "data": {
                                  "msg": "Invalid Request"
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkstatusFour">List of failed responses</button>
                    </h2>
                    <div id="checkstatusFour" class="accordion-collapse collapse" data-bs-parent="#checkstatus-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                            <tr>
                              <td>Order Not Found</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkstatusFive">List of statuses</button>
                    </h2>
                    <div id="checkstatusFive" class="accordion-collapse collapse" data-bs-parent="#checkstatus-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Pending</td>
                            </tr>
                            <tr>
                              <td>Processing</td>
                            </tr>
                            <tr>
                              <td>Success</td>
                            </tr>
                            <tr>
                              <td>Error</td>
                            </tr>
                            <tr>
                              <td>Partial</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="newrefill">
                <div class="accordion card" id="newrefill-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#newrefillOne">Endpoint</button>
                    </h2>
                    <div id="newrefillOne" class="accordion-collapse collapse show" data-bs-parent="#newrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#newrefillTwo">Body</button>
                    </h2>
                    <div id="newrefillTwo" class="accordion-collapse collapse" data-bs-parent="#newrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>Parameter</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Mandatory</th>
                              <th>Example</th>
                            </tr>
                            <tr>
                              <td>api_id</td>
                              <td>int</td>
                              <td>Your API ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                            <tr>
                              <td>api_key</td>
                              <td>string</td>
                              <td>Your API Key</td>
                              <td>Yes</td>
                              <td>f6a9xxxxxx</td>
                            </tr>
                            <tr>
                              <td>secret_key</td>
                              <td>string</td>
                              <td>Your Secret Key</td>
                              <td>Yes</td>
                              <td>aditdev.id</td>
                            </tr>
                            <tr>
                              <td>id</td>
                              <td>int</td>
                              <td>Order ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#newrefillThree">Example responses</button>
                    </h2>
                    <div id="newrefillThree" class="accordion-collapse collapse" data-bs-parent="#newrefill-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <th width="50%" class="table-success">Success</th>
                              <th width="50%" class="table-danger">Fail</th>
                            </tr>
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": {
                                  "refill_id": 54321,
                                  "order_id": 12345
                                  }
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false,
                                  "data": {
                                  "msg": "Invalid Request"
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#newrefillFour">List of failed responses</button>
                    </h2>
                    <div id="newrefillFour" class="accordion-collapse collapse" data-bs-parent="#newrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                            <tr>
                              <td>Order Not Found</td>
                            </tr>
                            <tr>
                              <td>Refill Disallowed</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="checkrefill">
                <div class="accordion card" id="checkrefill-accordion" style="box-shadow: none;">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#checkrefillOne">Endpoint</button>
                    </h2>
                    <div id="checkrefillOne" class="accordion-collapse collapse show" data-bs-parent="#checkrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>API URL</th>
                              <td>{{ url('/') }}</td>
                            </tr>
                            <tr>
                              <th>HTTP Method</th>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <th>Response Format</th>
                              <td>JSON</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkrefillTwo">Body</button>
                    </h2>
                    <div id="checkrefillTwo" class="accordion-collapse collapse" data-bs-parent="#checkrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <th>Parameter</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Mandatory</th>
                              <th>Example</th>
                            </tr>
                            <tr>
                              <td>api_id</td>
                              <td>int</td>
                              <td>Your API ID</td>
                              <td>Yes</td>
                              <td>12345</td>
                            </tr>
                            <tr>
                              <td>api_key</td>
                              <td>string</td>
                              <td>Your API Key</td>
                              <td>Yes</td>
                              <td>f6a9xxxxxx</td>
                            </tr>
                            <tr>
                              <td>secret_key</td>
                              <td>string</td>
                              <td>Your Secret Key</td>
                              <td>Yes</td>
                              <td>ABCD</td>
                            </tr>
                            <tr>
                              <td>id</td>
                              <td>int</td>
                              <td>Refill ID</td>
                              <td>Yes</td>
                              <td>54321</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkrefillThree">Example responses</button>
                    </h2>
                    <div id="checkrefillThree" class="accordion-collapse collapse" data-bs-parent="#checkrefill-accordion">
                      <div class="accordion-body p-0">
                        <div class="table-responsive">
                          <table class="table table-borderless m-0">
                            <tr>
                              <th width="50%" class="table-success">Success</th>
                              <th width="50%" class="table-danger">Fail</th>
                            </tr>
                            <tr>
                              <td>
                                <pre><code class="language-php">{
                                  "response": true,
                                  "data": {
                                  "refill_id": 54321,
                                  "order_id": 12345,
                                  "status": "Pending"
                                  }
                                  }</code></pre>
                              </td>
                              <td>
                                <pre><code class="language-php">{
                                  "response": false,
                                  "data": {
                                  "msg": "Invalid Request"
                                  }
                                  }</code></pre>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkrefillFour">List of failed responses</button>
                    </h2>
                    <div id="checkrefillFour" class="accordion-collapse collapse" data-bs-parent="#checkrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Invalid Request</td>
                            </tr>
                            <tr>
                              <td>Invalid API ID</td>
                            </tr>
                            <tr>
                              <td>Invalid API Key</td>
                            </tr>
                            <tr>
                              <td>Invalid Secret Key</td>
                            </tr>
                            <tr>
                              <td>Unauthorized IP (123.xxx.xxx)</td>
                            </tr>
                            <tr>
                              <td>Refill Not Found</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#checkrefillFive">List of statuses</button>
                    </h2>
                    <div id="checkrefillFive" class="accordion-collapse collapse" data-bs-parent="#checkrefill-accordion">
                      <div class="accordion-body">
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <tr>
                              <td>Pending</td>
                            </tr>
                            <tr>
                              <td>Processing</td>
                            </tr>
                            <tr>
                              <td>Success</td>
                            </tr>
                            <tr>
                              <td>Error</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="{{ asset('assets/js/plugins/prism.js') }}"></script>
<script src="{{ asset('assets/js/component.js') }}"></script>
@endsection