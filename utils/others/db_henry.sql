USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Colaboradores]    Script Date: 14/08/2023 17:50:54 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Colaboradores](
	[Codigo_Colaborador] [nchar](8) NOT NULL,
	[DNI] [nchar](8) NULL,
	[Apellidos] [nchar](40) NULL,
	[Nombres] [nchar](40) NULL,
	[Codigo_Cargo] [nvarchar](2) NULL,
	[Codigo_Puesto] [nchar](4) NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Actualizacion] [date] NULL,
	[Codigo_Supervisor] [nchar](8) NULL,
	[Usuario] [nchar](10) NULL,
	[Codigo_Interno] [int] IDENTITY(1,1) NOT NULL,
	[Estado] [nchar](10) NULL,
 CONSTRAINT [PK_EDA_Colaboradores] PRIMARY KEY CLUSTERED 
(
	[Codigo_Colaborador] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO





USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Login]    Script Date: 14/08/2023 17:50:59 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Login](
	[Codigo_Colaborador] [nchar](8) NULL,
	[Estadoa] [nchar](1) NULL,
	[Insertar] [nchar](1) NULL,
	[Eliminar] [nchar](1) NULL,
	[Actualizar] [nchar](1) NULL,
	[Consultar] [nchar](1) NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Baja] [date] NULL,
	[Ultima_Sesion] [date] NULL,
	[Clave] [nchar](15) NULL,
	[Usuario] [nchar](10) NULL,
	[Apellidos_Nombres] [nchar](50) NULL
) ON [PRIMARY]

GO







USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Modulos]    Script Date: 14/08/2023 17:51:05 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Modulos](
	[Orden] [nchar](4) NOT NULL,
	[modulo] [nchar](50) NULL,
	[descripcion_modulo] [nchar](100) NULL,
	[Formulario] [nchar](100) NULL,
	[Orden_Visualizar] [nchar](4) NULL,
 CONSTRAINT [PK_EDA_Modulos] PRIMARY KEY CLUSTERED 
(
	[Orden] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO





USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Objetivos]    Script Date: 14/08/2023 17:51:09 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Objetivos](
	[Id_Objetivo] [nchar](10) NULL,
	[Codigo_Colaborador] [nchar](8) NULL,
	[Objetivo] [nchar](200) NULL,
	[Descripcion_Objetivo] [nvarchar](max) NULL,
	[Porcentaje] [numeric](18, 0) NULL,
	[Indicadores_Objetivo] [nvarchar](max) NULL,
	[Fecha_Vencimiento] [date] NULL,
	[Puntaje_01] [decimal](18, 2) NULL CONSTRAINT [DF_EDA_Objetivos_Puntaje_01]  DEFAULT ((0)),
	[Fecha_Calificacion_01] [date] NULL,
	[Fecha_Aprobacion_01] [date] NULL,
	[Puntaje_02] [decimal](18, 2) NULL CONSTRAINT [DF_EDA_Objetivos_Puntaje_02]  DEFAULT ((0)),
	[Fecha_Calificacion_02] [date] NULL,
	[Fecha_Aprobacion_02] [date] NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Modificacion] [date] NULL,
	[Usuario] [nchar](10) NULL,
	[Aprobado_Objetivo] [nchar](1) NULL,
	[Aprobado_Evaluacion_01] [nchar](1) NULL,
	[Aprobado_Evaluacion_02] [nchar](1) NULL,
	[Ano_Actividad] [nchar](4) NULL,
	[Nro_Objetivo] [numeric](18, 0) IDENTITY(1,1) NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO




USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Puesto_Colaboradores]    Script Date: 14/08/2023 17:51:13 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Puesto_Colaboradores](
	[Codigo_Puesto] [nchar](4) NOT NULL,
	[Descripcion] [nchar](100) NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Actualizacion] [date] NULL,
	[Codigo_Cargo] [numeric](2, 0) NOT NULL,
	[Usuario] [nchar](20) NULL,
 CONSTRAINT [PK_EDA_Puesto_Colaboradores] PRIMARY KEY CLUSTERED 
(
	[Codigo_Puesto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO




USE [EDA_CONSORCIO]
GO

/****** Object:  Table [dbo].[EDA_Supervisores]    Script Date: 14/08/2023 17:51:16 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Supervisores](
	[Codigo_Colaborador] [nchar](8) NOT NULL,
	[Codigo_Supervisor] [nchar](8) NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Actualizacion] [date] NULL,
	[Usuario] [nchar](10) NULL,
	[Codigo_Interno] [int] IDENTITY(1,1) NOT NULL
) ON [PRIMARY]

GO
USE [EDA_CONSORCIO]
GO

/** Object:  Table [dbo].[EDA_Accesos]    Script Date: 14/08/2023 17:54:46 **/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Accesos](
	[Orden] [nchar](3) NULL,
	[Usuario] [nchar](15) NULL,
	[Modulo] [nchar](50) NULL,
	[Acceso] [nchar](1) NULL,
	[Usuario_Sistema] [nchar](20) NULL
) ON [PRIMARY]

GO

USE [EDA_CONSORCIO]
GO

/** Object:  Table [dbo].[EDA_Aprobaciones]    Script Date: 14/08/2023 17:55:05 **/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Aprobaciones](
	[Id_Objetivo] [nchar](10) NULL,
	[Aprobado] [nchar](1) NULL,
	[Fecha_Aprobacion] [date] NULL,
	[Fecha_Registro] [date] NULL,
	[Fecha_Modificacion] [date] NULL,
	[Usuario] [nchar](10) NULL,
	[Evaluacion_1] [date] NULL,
	[Aprobado_Supervisor_01] [nchar](1) NULL CONSTRAINT [DF_EDA_Aprobaciones_Aprobado_Supervisor_01]  DEFAULT ('N'),
	[Cerrar_Eda_01] [nchar](1) NULL CONSTRAINT [DF_EDA_Aprobaciones_Aprobado_Supervisor_011]  DEFAULT ('N'),
	[Evaluacion_2] [date] NULL,
	[Aprobado_Supervisor_02] [nchar](1) NULL CONSTRAINT [DF_EDA_Aprobaciones_Aprobado_Supervisor_02]  DEFAULT ('N'),
	[Cerrar_Eda_02] [nchar](1) NULL CONSTRAINT [DF_EDA_Aprobaciones_Cerrar_Eda_011]  DEFAULT ('N'),
	[Cerrar_Eda_Final] [nchar](1) NULL CONSTRAINT [DF_EDA_Aprobaciones_Cerrar_Eda_Final]  DEFAULT ('N'),
	[Fecha_Eda_Final] [date] NULL
) ON [PRIMARY]

GO
USE [EDA_CONSORCIO]
GO

/** Object:  Table [dbo].[EDA_Cargo]    Script Date: 14/08/2023 17:55:17 **/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[EDA_Cargo](
	[Codigo_Cargo] [nvarchar](2) NOT NULL,
	[Nombre_Cargo] [nchar](50) NULL,
 CONSTRAINT [PK_EDA_Cargo] PRIMARY KEY CLUSTERED 
(
	[Codigo_Cargo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO