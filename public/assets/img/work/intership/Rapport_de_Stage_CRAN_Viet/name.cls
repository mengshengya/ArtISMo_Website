\LoadClass[a4paper,12pt]{article} % Classe du document

%--------------------- Packages ------------------------

\RequirePackage[french]{babel} %Langue du document
\RequirePackage[utf8]{inputenc} %Caractères spéciaux
\RequirePackage[section]{placeins}%Pour placement de section
\RequirePackage[T1]{fontenc} %Quelques lettres qui sont pas inclus dans UTF-8
\RequirePackage{lmodern}

\RequirePackage{mathtools} %Paquet pour des équations et symboles mathématiques
\RequirePackage{siunitx} %Pour écrire avec la notation scientifique (Ex.: \num{2e+9})
\RequirePackage{float} %Pour placement d'images
\RequirePackage{graphicx} %Paquet pour insérer des images
\RequirePackage[justification=centering]{caption} %Pour les légendes centralisées
\RequirePackage{subcaption}
\RequirePackage{wallpaper}
\RequirePackage{nomencl}
%\makenomenclature
\RequirePackage{fancyhdr}
%\pagestyle{fancy}
%\fancyheadoffset{1cm}
%\setlength{\headheight}{2cm}
\RequirePackage{url}
\RequirePackage[hidelinks]{hyperref}%Paquet pour insérer légendes dans des sous-figures comme Figure 1a, 1b
\RequirePackage[left=2.5cm,right=2.5cm,top=2cm,bottom=3.5cm]{geometry} %Configuration de la page
\usepackage{adjustbox}

%-------------------- Informations sur le rapport ----------------------

\newcommand{\UE}[1]{\renewcommand{\UE}{#1}}
\newcommand{\sujet}[1]{\renewcommand{\sujet}{#1}}
\newcommand{\titre}[1]{\renewcommand{\titre}{#1}}
\newcommand{\enseignant}[1]{\renewcommand{\enseignant}{#1}}
\newcommand{\eleves}[1]{\renewcommand{\eleves}{#1}}


\newcommand{\fairemarges}{
\makenomenclature
\pagestyle{fancy}
\fancyheadoffset{1cm}
\setlength{\headheight}{2cm}
%Affichage de l'image au top de la page
\rhead{\nouppercase{\leftmark}}
% \rfoot{\thepage}
% \cfoot{  \textbf{\titre}}
% \lfoot{\UE}
}

\newcommand{\fairepagedegarde}{
\begin{titlepage}
 \centering %Centraliser le contenu
  \begin{figure}[H]
    \centering
    % 第一行
    \begin{minipage}[h]{0.35\textwidth}
        \centering
        \includegraphics[width=0.8\textwidth]{figures/CRAN.png}
    \end{minipage}
    \hfill
    \begin{minipage}[h]{0.4\textwidth}
        \centering
        \includegraphics[width=0.8\textwidth]{figures/iut.jpg}
    \end{minipage}

    \vspace{0.5cm} % 行间距

    % 第二行
    \begin{minipage}[h]{0.5\textwidth}
        \centering
        \includegraphics[width=0.8\textwidth]{f/fdsamu.png}
    \end{minipage}
    \hfill
    \begin{minipage}[h]{0.4\textwidth}
        \centering
        \includegraphics[width=0.8\textwidth]{f/idl.png}
    \end{minipage}
 \end{figure}

        
        \vspace{1.cm}%Espace de 1,5cm

 \vspace{1.cm}%Espace de 1,5cm
 {\scshape\Large \UE \\ \sujet \\ \par} %sous-titre
 \vspace{1cm}%Espace de 1cm
    \rule{\linewidth}{0.2 mm} \\[0.4 cm]
 {\huge\bfseries \titre \par} \
    \rule{\linewidth}{0.2 mm} \\[1. cm]
 \vspace{1cm}%Espace de 3cm

 \begin{minipage}{0.5\textwidth} %Minipage pour faire deux colonnes
  \begin{center} \large %Envoyer à gauche
  \emph{\textbf{}}\\ %Pour le titre au dessus des noms à gauche
        \eleves %Remplacer pour chacun
  \end{center}
 \end{minipage}
 

    
 \vfill
 {\large Année 2024/2025\par}

\end{titlepage}
}

\newcommand{\tabledematieres}{
\tableofcontents
\newpage
}

\newcommand{\insererfigure}[4]{
\begin{figure}[ht]
\centering
\includegraphics[height=#2]{#1}
\caption{#3}
\label{fig: #4}
\end{figure}
}

\definecolor{lightgray}{gray}{0.95}

