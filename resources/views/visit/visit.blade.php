<section class="bg-gradient-light position-relative z-index-0 sm-pt-0 pt-0">
    <div class="container position-relative pt-3 sm-pt-55px">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold">Agende sua Visita Técnica</h2>
                <a class="fw-bold">Em sua residência ou remotamente com facilidade<small class="form-text text-muted">
                        O preços flexíveis de acordo com o serviço. Para serviços maiores, como Cabeamento e Organização de Redes, Recuperação de Dados dentre outros entre em contato pelo WhatsApp para detalhes.
                    </small></a>
                <p class="mt-2">
                    Se preferir, fale conosco pelo WhatsApp
                    <a href="https://wa.me/5542998270917?text=Olá!%20Vim%20pelo%20site%20e%20gostaria%20de%20agendar%20uma%20visita%20técnica." target="_blank" class="whatsapp-link">
                        <i class="fab fa-whatsapp"></i> (42) 99827-0917
                    </a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form id="agendamentoForm" action="{{ route('agendar.visita') }}" method="POST" class="agendamento-form p-4 shadow-lg rounded bg-white">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <div class="input-group">
                                <span class="input-group-text "><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control required" id="name" name="name" placeholder="Seu nome completo" required>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" class="form-control required" id="phone" name="phone" placeholder="(00) 00000-0000" required>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control required" id="email" name="email" placeholder="seuemail@email.com" required>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="technician" class="form-label">Escolha o Técnico</label>
                            <select class="selectpicker form-control" id="technician" name="technician" required data-live-search="true">
                                <option value="Khauan Bandeira" data-content='<img src="assets/images/khauan.jpg" alt="Khauan Bandeira" class="rounded-circle me-2" style="width: 30px; height: 30px;"> Khauan Bandeira'>Khauan Bandeira</option>
                                <!-- <option value="tecnico2" data-content='<img src="assets/images/khauan.jpg" alt="Técnico 2" class="rounded-circle me-2" style="width: 30px; height: 30px;"> Técnico 2'>Técnico 2</option>
                                <option value="tecnico3" data-content='<img src="assets/images/khauan.jpg" alt="Técnico 3" class="rounded-circle me-2" style="width: 30px; height: 30px;"> Técnico 3'>Técnico 3</option> -->
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="urgency" class="form-label">Urgência</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="urgency" name="urgency" value="Urgente" onclick="toggleTooltip()">
                                <label class="form-check-label padding-urgency" for="urgency">
                                    Com Urgência
                                </label>
                            </div>
                            <div id="urgencyTooltip" class="urgency-tooltip" style="display: none;">
                                Chegaremos até você em no máximo duas horas!
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="selectedDate" class="form-label">Escolha a Data</label>
                            <input type="text" class="form-control required" id="selectedDate" name="selectedDate" placeholder="Escolha a data" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="selectedTime" class="form-label">Escolha o Horário</label>
                            <select class="form-control p-0 ps-5 required" id="selectedTime" name="selectedTime" required>
                                <option value="">Selecione o horário</option>
                            </select>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <label for="address" class="form-label">Seu Endereço</label>
                            <div class="input-group">
                                <span class="input-group-text "><i class="bi bi-house-door"></i></span>
                                <input type="text" class="form-control required" id="address" name="address" placeholder="Digite seu endereço completo" required>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="remoteService" class="form-label">Atendimento Remoto</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remoteService" name="remoteService" value="Remoto">
                                <label class="form-check-label ps-3" for="remoteService">
                                    Serviço realizado remotamente
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="price" class="form-label">Preço do Serviço</label>
                            <input type="text" class="form-control" id="price" name="price" readonly>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="serviceDescription" class="form-label">Descrição do Serviço</label>
                            <textarea class="form-control required" id="serviceDescription" name="serviceDescription" rows="3" placeholder="Detalhe o serviço necessário" required></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                        <button id="submit-button-visit" class="mb-2 btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit">
                            <span id="button-text">Confirmar Agendamento</span>
                            <span id="loading-spinner" class="loading-spinner d-none"></span>
                        </button>
                        <p class="mt-2 mb-3">
                            Se houver qualquer problema com o agendamento ou se não<br>fizermos contato, por favor, nos chame pelo WhatsApp. <a href="https://wa.me/5542998270917?text=Olá!%20Vim%20pelo%20site%20e%20gostaria%20de%20agendar%20uma%20visita%20técnica." target="_blank" class="whatsapp-link"> <i class="fab fa-whatsapp"></i> (42) 99827-0917
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>