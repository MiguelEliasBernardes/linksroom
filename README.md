# 📎 LinksRoom

Sistema simples para gerenciamento de links, feito com **Laravel**, **SQLite**, **Tailwind CSS** e **DaisyUI**.

---

## 🚀 Como rodar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/MiguelEliasBernardes/linksroom.git
cd linksroom
2. Instale as dependências
bash
Copiar
Editar
composer install
npm install
3. Configure o ambiente
bash
Copiar
Editar
cp .env.example .env
php artisan key:generate
4. Configure o banco de dados SQLite
Crie o arquivo do banco de dados:

bash
Copiar
Editar
touch database/database.sqlite
No arquivo .env, altere as configurações de banco:

env
Copiar
Editar
DB_CONNECTION=sqlite
DB_DATABASE=/caminho/absoluto/para/database/database.sqlite
💡 Substitua /caminho/absoluto/para/ pelo caminho real do seu projeto.

5. Execute as migrations
bash
Copiar
Editar
php artisan migrate
6. Compile os assets com Tailwind + DaisyUI
bash
Copiar
Editar
npm run dev
7. Inicie o servidor
bash
Copiar
Editar
php artisan serve
Acesse o sistema em: http://localhost:8000
