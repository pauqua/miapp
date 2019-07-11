CREATE TABLE IF NOT EXISTS Usuarios (
    UsuarioId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR (200) NOT NULL,
    Username VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(200) NOT NULL,
    PRIMARY KEY (UsuarioId)
);

CREATE TABLE IF NOT EXISTS Categorias (
    CategoriaId INT NOT NULL AUTO_INCREMENT,
    Nombre TEXT NOT NULL,
    Descripcion TEXT,
    PRIMARY KEY (CategoriaId)
);

CREATE TABLE IF NOT EXISTS Productos (
    ProductoId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(200) NOT NULL,
    Imagen VARCHAR (250) NOT NULL,
    Descripcion TEXT,
    Precio DECIMAL,
    CategoriaId INT NOT NULL,
    PRIMARY KEY (ProductoId),
    FOREIGN KEY (CategoriaId) REFERENCES Categorias (CategoriaId)
);

CREATE TABLE IF NOT EXISTS Porosidades (
    PorosidadId INT NOT NULL AUTO_INCREMENT,
    Nombre TEXT,
    Descripcion TEXT,
    PRIMARY KEY (PorosidadId)
);

CREATE TABLE IF NOT EXISTS Etapas (
    EtapaId INT NOT NULL AUTO_INCREMENT,
    Nombre TEXT,
    Descripcion TEXT,
    PorosidadId INT NOT NULL,
    PRIMARY KEY (EtapaId),
    FOREIGN KEY (PorosidadId) REFERENCES Porosidades (PorosidadId)
);

CREATE TABLE IF NOT EXISTS Cronogramas (
    CronogramaId INT NOT NULL AUTO_INCREMENT,
    UsuarioId INT NOT NULL,
    Etapa1 BOOLEAN DEFAULT FALSE,
    Etapa2 BOOLEAN DEFAULT FALSE,
    Etapa3 BOOLEAN DEFAULT FALSE,
    Etapa4 BOOLEAN DEFAULT FALSE,
    Etapa5 BOOLEAN DEFAULT FALSE,
    Etapa6 BOOLEAN DEFAULT FALSE,
    Etapa7 BOOLEAN DEFAULT FALSE,
    Etapa8 BOOLEAN DEFAULT FALSE,
    Etapa9 BOOLEAN DEFAULT FALSE,
    Etapa10 BOOLEAN DEFAULT FALSE,
    Etapa11 BOOLEAN DEFAULT FALSE,
    Etapa12 BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (CronogramaId),
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios (UsuarioId),
);

CREATE TABLE IF NOT EXISTS Mensajes (
    MensajeId INT NOT NULL AUTO_INCREMENT,
    Mensaje VARCHAR(500),
    Fecha DATETIME,
    UsuarioId INT NOT NULL,
    PRIMARY KEY (MensajeId)
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios (UsuarioId)
);

CREATE TABLE IF NOT EXISTS Favoritos (
    FavoritoId INT NOT NULL AUTO_INCREMENT,
    UsuarioId INT NOT NULL,
    ProductoId INT NOT NULL,
    PRIMARY KEY (FavoritoId)
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios (UsuarioId),
    FOREIGN KEY (ProductoId) REFERENCES Productos (ProductoId)
);

