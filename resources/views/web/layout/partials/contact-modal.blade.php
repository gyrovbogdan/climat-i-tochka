<div class="modal fade" id="contact-modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="staticBackdropLabel">Сделать заказ можно по телефону или в социальных
                    сетях:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <a class="input-group-text btn btn-success bg-gradient" id="basic-addon1" aria-label="phone-number"
                        href="tel:{{ $phone }}"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg></a>
                    <a class="form-control fw-semibold" disabled aria-describedby="basic-addon1"
                        aria-label="phone-number" href="tel:{{ $phone }}">
                        {{ $phone }}
                    </a>
                </div>
                <div class="input-group
                        mb-3">
                    <a class="input-group-text btn btn-primary bg-gradient" id="basic-addon1" aria-label="vk-link"
                        href="{{ $vk }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0,0,256,256">
                            <g fill="currentColor" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M25,2c-12.682,0 -23,10.318 -23,23c0,12.682 10.318,23 23,23c12.683,0 23,-10.318 23,-23c0,-12.682 -10.317,-23 -23,-23zM34.973,29.535c2.237,1.986 2.702,2.695 2.778,2.816c0.927,1.47 -1.028,1.649 -1.028,1.649h-4.12c0,0 -1.003,0.011 -1.86,-0.557c-1.397,-0.915 -2.86,-2.689 -3.888,-2.381c-0.863,0.258 -0.855,1.424 -0.855,2.421c0,0.357 -0.307,0.517 -1,0.517c-0.693,0 -0.981,0 -1.288,0c-2.257,0 -4.706,-0.76 -7.149,-3.313c-3.456,-3.609 -6.487,-10.879 -6.487,-10.879c0,0 -0.179,-0.366 0.016,-0.589c0.221,-0.25 0.822,-0.218 0.822,-0.218l3.995,-0.001c0,0 0.376,0.071 0.646,0.261c0.223,0.156 0.347,0.454 0.347,0.454c0,0 0.671,2.216 1.526,3.629c1.67,2.758 2.447,2.828 3.014,2.531c0.828,-0.43 0.558,-3.362 0.558,-3.362c0,0 0.037,-1.259 -0.395,-1.82c-0.333,-0.434 -0.97,-0.665 -1.248,-0.701c-0.225,-0.029 0.151,-0.423 0.63,-0.648c0.64,-0.285 1.511,-0.358 3.013,-0.344c1.169,0.011 1.506,0.081 1.962,0.186c1.379,0.318 1.038,1.157 1.038,4.103c0,0.944 -0.13,2.271 0.582,2.711c0.307,0.19 1.359,0.422 3.231,-2.618c0.889,-1.442 1.596,-3.834 1.596,-3.834c0,0 0.146,-0.263 0.373,-0.393c0.232,-0.133 0.225,-0.13 0.543,-0.13c0.318,0 3.507,-0.025 4.207,-0.025c0.699,0 1.355,-0.008 1.468,0.402c0.162,0.589 -0.516,2.607 -2.234,4.797c-2.823,3.594 -3.136,3.258 -0.793,5.336z">
                                    </path>
                                </g>
                            </g>
                        </svg></a>
                    <a class="form-control fw-semibold" disabled aria-describedby="basic-addon1" aria-label="vk-link"
                        href="{{ $vk }}">
                        Перейти в группу Вконтакте
                    </a>
                </div>
                <div class="input-group mb-3">
                    <a class="input-group-text btn btn-buy bg-gradient" href="{{ $whatsApp }}"
                        aria-label="whatsApp-link" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-whatsapp"
                            viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg></a>
                    <a class="form-control fw-semibold" disabled aria-describedby="basic-addon1"
                        href="{{ $whatsApp }}">
                        Написать нам в WhatsApp
                    </a>
                </div>
                <div class="input-group mb-3">
                    <a class="input-group-text btn btn-info text-white bg-gradient" href="{{ $telegram }}"
                        aria-label="telegram-link" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-telegram"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                        </svg></span>
                        <a class="form-control fw-semibold" disabled aria-describedby="basic-addon1"
                            aria-label="telegram-link" href="{{ $telegram }}">
                            Сделать заказ в Telegram
                        </a>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Понятно</button>
            </div>
        </div>
    </div>
</div>
