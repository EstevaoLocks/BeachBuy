<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Nascimento | Surf & Beach</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="nav-container">
            <div class="logo">BRUNO <span>NASCIMENTO</span></div>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#equipamentos">Equipamentos</a></li>
                    <li><a href="#aulas">Aulas</a></li>
                    <li><a href="#clima">Condições</a></li>
                    <li><a href="#galeria">Galeria</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
            <a href="login.php" class="btn-header">RESERVAR AGORA</a>
        </div>
    </header>

    <section id="inicio" class="hero">
        <h1>SURF.<br><span>PRAIA.</span><br>LIBERDADE.</h1>
        <p style="margin-top:20px; color:var(--text-muted);">Viva o mar com quem mais entende. Aulas e Equipamentos Premium.</p>
    </section>

    <section id="equipamentos">
        <h2 class="section-title">Tudo que você <span>precisa na praia</span></h2>
        <div class="grid-cards">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1531728724750-149029871713?w=500" class="card-img" alt="Prancha">
                <div class="card-body">
                    <h3>Prancha de Surf</h3>
                    <p class="price-tag">R$ 50 <span style="font-size:0.9rem; color:var(--text-muted);">/hora</span></p>
                    <a href="produto.php" class="btn-card">Reservar</a>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?w=500" class="card-img" alt="Cadeira">
                <div class="card-body">
                    <h3>Cadeira de Praia</h3>
                    <p class="price-tag">R$ 20 <span style="font-size:0.9rem; color:var(--text-muted);">/dia</span></p>
                    <a href="#contato" class="btn-card">Reservar</a>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=500" class="card-img" alt="Guarda-sol">
                <div class="card-body">
                    <h3>Guarda-Sol</h3>
                    <p class="price-tag">R$ 25 <span style="font-size:0.9rem; color:var(--text-muted);">/dia</span></p>
                    <a href="#contato" class="btn-card">Reservar</a>
                </div>
            </div>
        </div>
    </section>

    <section id="clima" style="background-color: var(--bg-card); border-radius: 12px; margin-bottom: 60px; padding: 50px;">
        <h2 class="section-title">Previsão de <span>Ondas & Clima</span></h2>
        <div style="display: flex; gap: 40px; flex-wrap: wrap; justify-content: space-between;">
            <div>
                <h3>Qualidade do Surf</h3>
                <div style="font-size: 3rem; color: var(--primary-cyan); font-weight: 800; margin: 10px 0;">88 / 100</div>
                <p style="color: var(--accent-green)">ÓTIMO PARA SURFAR</p>
            </div>
            <div style="min-width: 250px;">
                <p><strong>Altura das Ondas:</strong> 1.8M</p>
                <p><strong>Vento:</strong> 12 km/h</p>
                <p><strong>Temperatura da Água:</strong> 24°C</p>
                <p><strong>Temperatura Externa:</strong> 28°C</p>
            </div>
        </div>
    </section>

    <section id="contato">
        <h2 class="section-title">Reserve sua <span>Experiência</span></h2>
        <div class="form-box" style="max-width: 700px; margin: 0 auto;">
            <form action="processar.php" method="POST">
                <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="form-group">
                    <label>WhatsApp</label>
                    <input type="tel" name="whatsapp" placeholder="(47) 99999-9999" required>
                </div>
                <div class="form-group">
                    <label>Tipo de Reserva</label>
                    <select name="servico">
                        <option value="surf_iniciante">Aula Iniciante - R$ 180</option>
                        <option value="surf_intermedio">Aula Intermediária - R$ 220</option>
                        <option value="aluguel_prancha">Aluguel de Prancha - R$ 50/h</option>
                    </select>
                </div>
                <button type="submit" class="btn-header" style="width: 100%; border: none; cursor: pointer; padding: 15px;">ENVIAR RESERVA</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Bruno Nascimento</h4>
                <p style="color: var(--text-muted);">Escola de surf e aluguel de equipamentos na praia. Viva a experiência do mar.</p>
            </div>
            <div class="footer-col">
                <h4>Navegação</h4>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#equipamentos">Equipamentos</a></li>
                    <li><a href="#aulas">Aulas</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contato</h4>
                <p style="color: var(--text-muted);">📍 Praia Central<br>Balneário Camboriú - SC</p>
                <p style="color: var(--primary-cyan); margin-top: 10px;">📞 (47) 99999-9999</p>
            </div>
        </div>
        <div style="text-align: center; color: var(--text-muted); font-size: 0.8rem; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 20px;">
            © 2026 Bruno Nascimento Surf & Beach. Feito com ♥ para o mar.
        </div>
    </footer>

</body>
</html>