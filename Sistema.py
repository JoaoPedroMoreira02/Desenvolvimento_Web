import mysql.connector as mysql

running = True


class veiculo():
    modelo = ""
    marca = ""
    placa = ""
    cor = ""
    ano = 0
    km = 0
    preço = 0.0

    mydb = mysql.connect(
        host="127.0.0.1", user="root", password="admin",
        database="bd_concessionaria"
    )

    def criar(self):
        self.placa = input("Digite a placa: ")
        self.modelo = input("Digite o modelo: ")
        self.marca = input("Digite a marca: ")
        self.cor = input("Digite a cor: ")
        self.ano = int(input("Digite o ano: "))
        self.km = int(input("Digite a kilometragem: "))
        self.preço = float(input("Digite o preço: "))
        print("")
        print("VEÍCULO CADASTRADO!!")

        mycursor = self.mydb.cursor()

        sql = """INSERT INTO tb_veiculos (
            placa,
            marca,
            modelo,
            ano,
            cor,
            km,
            preco
            ) VALUES (%s, %s, %s, %s, %s, %s, %s)"""
        val = (
            self.placa,
            self.marca,
            self.modelo,
            self.ano,
            self.cor,
            self.km,
            self.preço
        )
        mycursor.execute(sql, val)
        self.mydb.commit()

    def ler(self):
        print("----"*30)
        print(f"Placa: {self.placa}")
        print(f"Modelo: {self.modelo}")
        print(f"Marca: {self.marca}")
        print(f"Cor: {self.cor}")
        print(f"Ano: {self.ano}")
        print(f"Kilometragem: {self.km}")
        print(f"Preço: {self.preço}")

    def update(self):
        nova_placa = input("Digite a placa: ")
        if nova_placa != "":
            self.placa = nova_placa
        novo_modelo = input("Digite o modelo: ")
        if novo_modelo != "":
            self.modelo = novo_modelo
        nova_marca = input("Digite a marca: ")
        if nova_marca != "":
            self.marca = nova_marca
        nova_cor = input("Digite a cor: ")
        if nova_cor != "":
            self.cor = nova_cor
        novo_ano = input("Digite o ano: ")
        if novo_ano != "":
            self.ano = int(novo_ano)
        nova_km = input("Digite a kilometragem: ")
        if nova_km != "":
            self.km = int(nova_km)
        novo_preço = input("Digite o preço: ")
        if novo_preço != "":
            self.preço = float(novo_preço)

    def delete(self):
        del self


a = veiculo()

print("")
print("SISTEMA")
print("---" * 30)
print("""
1 --- Cadastro
2 --- Valores Salvos
3 --- Atualizar
4 --- Deletar
5 --- Sair do programa""")
print("---" * 30)
print("")

while running:
    escolha = int(input("Digite a sua opção: "))

    if escolha in range(1, 6):
        if escolha == 1:
            a.criar()
            print("---" * 30)
        elif escolha == 2:
            a.ler()
            print("---" * 30)
        elif escolha == 3:
            a.update()
            print("---" * 30)
        elif escolha == 4:
            a.delete()
        elif escolha == 5:
            print("Desligando...")
            running = False
    else:
        print("Opção inválida. Reiniciando")
        print("---" * 30)
