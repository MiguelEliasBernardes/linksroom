# 📎 LinksRoom

Sistema simples para gerenciamento de links, feito com **Laravel**, **SQLite**, **Tailwind CSS** e **DaisyUI**.

---

## 🚀 Como rodar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/MiguelEliasBernardes/linksroom.git
cd linksroom
```

### 2. Instale as dependências

```bash
composer install
npm install
```

### 3. Configure o ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure o banco de dados SQLite

Crie o arquivo do banco de dados:

```bash
touch database/database.sqlite
```

Edite o arquivo `.env` e ajuste a configuração do banco:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/caminho/absoluto/para/database/database.sqlite
```

> 💡 Substitua `/caminho/absoluto/para/` pelo caminho real até o arquivo `database.sqlite`.

### 5. Execute as migrations

```bash
php artisan migrate
```

### 6. Compile os assets com Tailwind + DaisyUI

```bash
npm run dev
```

### 7. Inicie o servidor

```bash
php artisan serve
```

Acesse o sistema em: [http://localhost:8000](http://localhost:8000)

---

## 🛠️ Tecnologias

- Laravel
- SQLite
- Tailwind CSS
- DaisyUI

---

Feito com 💻 por [Miguel Elias Bernardes](https://github.com/MiguelEliasBernardes)
