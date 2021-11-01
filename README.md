# POO-SOLID-php

[![forthebadge](data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzMuMDQiIGhlaWdodD0iMzUiIHZpZXdCb3g9IjAgMCAxMzMuMDQgMzUiPjxyZWN0IGNsYXNzPSJzdmdfX3JlY3QiIHg9IjAiIHk9IjAiIHdpZHRoPSI1Ni41NCIgaGVpZ2h0PSIzNSIgZmlsbD0iI0VBNDU2MCIvPjxyZWN0IGNsYXNzPSJzdmdfX3JlY3QiIHg9IjU0LjU0IiB5PSIwIiB3aWR0aD0iNzguNSIgaGVpZ2h0PSIzNSIgZmlsbD0iI0MxM0IzQSIvPjxwYXRoIGNsYXNzPSJzdmdfX3RleHQiIGQ9Ik0xNS43MCAyMkwxNC4yMiAyMkwxNC4yMiAxMy40N0wxNy40OCAxMy40N1ExOC45MSAxMy40NyAxOS43NSAxNC4yMVEyMC41OSAxNC45NiAyMC41OSAxNi4xOEwyMC41OSAxNi4xOFEyMC41OSAxNy40NCAxOS43NyAxOC4xM1ExOC45NSAxOC44MyAxNy40NiAxOC44M0wxNy40NiAxOC44M0wxNS43MCAxOC44M0wxNS43MCAyMlpNMTUuNzAgMTQuNjZMMTUuNzAgMTcuNjRMMTcuNDggMTcuNjRRMTguMjcgMTcuNjQgMTguNjkgMTcuMjdRMTkuMTAgMTYuOTAgMTkuMTAgMTYuMTlMMTkuMTAgMTYuMTlRMTkuMTAgMTUuNTAgMTguNjggMTUuMDlRMTguMjYgMTQuNjggMTcuNTIgMTQuNjZMMTcuNTIgMTQuNjZMMTUuNzAgMTQuNjZaTTI2LjM2IDIyTDI0Ljg4IDIyTDI0Ljg4IDEzLjQ3TDI2LjM2IDEzLjQ3TDI2LjM2IDE3LjAyTDMwLjE3IDE3LjAyTDMwLjE3IDEzLjQ3TDMxLjY1IDEzLjQ3TDMxLjY1IDIyTDMwLjE3IDIyTDMwLjE3IDE4LjIxTDI2LjM2IDE4LjIxTDI2LjM2IDIyWk0zNy44NyAyMkwzNi4zOSAyMkwzNi4zOSAxMy40N0wzOS42NSAxMy40N1E0MS4wOCAxMy40NyA0MS45MiAxNC4yMVE0Mi43NiAxNC45NiA0Mi43NiAxNi4xOEw0Mi43NiAxNi4xOFE0Mi43NiAxNy40NCA0MS45NCAxOC4xM1E0MS4xMiAxOC44MyAzOS42NCAxOC44M0wzOS42NCAxOC44M0wzNy44NyAxOC44M0wzNy44NyAyMlpNMzcuODcgMTQuNjZMMzcuODcgMTcuNjRMMzkuNjUgMTcuNjRRNDAuNDQgMTcuNjQgNDAuODYgMTcuMjdRNDEuMjggMTYuOTAgNDEuMjggMTYuMTlMNDEuMjggMTYuMTlRNDEuMjggMTUuNTAgNDAuODUgMTUuMDlRNDAuNDMgMTQuNjggMzkuNjkgMTQuNjZMMzkuNjkgMTQuNjZMMzcuODcgMTQuNjZaIiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggY2xhc3M9InN2Z19fdGV4dCIgZD0iTTY4LjE0IDIxLjI0TDY4LjE0IDIxLjI0TDY4LjkyIDE5LjQ5UTY5LjQ4IDE5Ljg2IDcwLjIzIDIwLjA5UTcwLjk3IDIwLjMyIDcxLjY5IDIwLjMyTDcxLjY5IDIwLjMyUTczLjA2IDIwLjMyIDczLjA2IDE5LjY0TDczLjA2IDE5LjY0UTczLjA2IDE5LjI4IDcyLjY3IDE5LjExUTcyLjI4IDE4LjkzIDcxLjQyIDE4Ljc0TDcxLjQyIDE4Ljc0UTcwLjQ3IDE4LjUzIDY5LjgzIDE4LjMwUTY5LjIwIDE4LjA2IDY4Ljc0IDE3LjU1UTY4LjI5IDE3LjAzIDY4LjI5IDE2LjE2TDY4LjI5IDE2LjE2UTY4LjI5IDE1LjM5IDY4LjcxIDE0Ljc3UTY5LjEzIDE0LjE1IDY5Ljk2IDEzLjc5UTcwLjgwIDEzLjQzIDcyLjAwIDEzLjQzTDcyLjAwIDEzLjQzUTcyLjgzIDEzLjQzIDczLjY0IDEzLjYyUTc0LjQ0IDEzLjgwIDc1LjA2IDE0LjE3TDc1LjA2IDE0LjE3TDc0LjMyIDE1LjkzUTczLjEyIDE1LjI4IDcxLjk5IDE1LjI4TDcxLjk5IDE1LjI4UTcxLjI4IDE1LjI4IDcwLjk2IDE1LjQ5UTcwLjY0IDE1LjcwIDcwLjY0IDE2LjA0TDcwLjY0IDE2LjA0UTcwLjY0IDE2LjM3IDcxLjAyIDE2LjU0UTcxLjQxIDE2LjcxIDcyLjI2IDE2Ljg5TDcyLjI2IDE2Ljg5UTczLjIyIDE3LjEwIDczLjg1IDE3LjMzUTc0LjQ4IDE3LjU2IDc0Ljk0IDE4LjA3UTc1LjQwIDE4LjU4IDc1LjQwIDE5LjQ2TDc1LjQwIDE5LjQ2UTc1LjQwIDIwLjIxIDc0Ljk4IDIwLjgzUTc0LjU2IDIxLjQ0IDczLjcyIDIxLjgwUTcyLjg4IDIyLjE3IDcxLjY4IDIyLjE3TDcxLjY4IDIyLjE3UTcwLjY2IDIyLjE3IDY5LjcwIDIxLjkyUTY4Ljc0IDIxLjY3IDY4LjE0IDIxLjI0Wk03OS41NSAxNy44MEw3OS41NSAxNy44MFE3OS41NSAxNi41NSA4MC4xNSAxNS41NVE4MC43NiAxNC41NiA4MS44MiAxNC4wMFE4Mi44OCAxMy40MyA4NC4yMSAxMy40M0w4NC4yMSAxMy40M1E4NS41NCAxMy40MyA4Ni42MSAxNC4wMFE4Ny42NyAxNC41NiA4OC4yOCAxNS41NVE4OC44OCAxNi41NSA4OC44OCAxNy44MEw4OC44OCAxNy44MFE4OC44OCAxOS4wNSA4OC4yOCAyMC4wNFE4Ny42NyAyMS4wNCA4Ni42MSAyMS42MFE4NS41NSAyMi4xNyA4NC4yMSAyMi4xN0w4NC4yMSAyMi4xN1E4Mi44OCAyMi4xNyA4MS44MiAyMS42MFE4MC43NiAyMS4wNCA4MC4xNSAyMC4wNFE3OS41NSAxOS4wNSA3OS41NSAxNy44MFpNODEuOTUgMTcuODBMODEuOTUgMTcuODBRODEuOTUgMTguNTEgODIuMjUgMTkuMDVRODIuNTUgMTkuNjAgODMuMDcgMTkuOTBRODMuNTggMjAuMjAgODQuMjEgMjAuMjBMODQuMjEgMjAuMjBRODQuODUgMjAuMjAgODUuMzcgMTkuOTBRODUuODggMTkuNjAgODYuMTggMTkuMDVRODYuNDggMTguNTEgODYuNDggMTcuODBMODYuNDggMTcuODBRODYuNDggMTcuMDkgODYuMTggMTYuNTRRODUuODggMTYgODUuMzcgMTUuNzBRODQuODUgMTUuNDAgODQuMjEgMTUuNDBMODQuMjEgMTUuNDBRODMuNTggMTUuNDAgODMuMDYgMTUuNzBRODIuNTUgMTYgODIuMjUgMTYuNTRRODEuOTUgMTcuMDkgODEuOTUgMTcuODBaTTEwMC4wMCAyMkw5My42MSAyMkw5My42MSAxMy42MEw5NS45OSAxMy42MEw5NS45OSAyMC4xMUwxMDAuMDAgMjAuMTFMMTAwLjAwIDIyWk0xMDYuODAgMjJMMTA0LjQyIDIyTDEwNC40MiAxMy42MEwxMDYuODAgMTMuNjBMMTA2LjgwIDIyWk0xMTUuOTQgMjJMMTExLjk3IDIyTDExMS45NyAxMy42MEwxMTUuOTQgMTMuNjBRMTE3LjMzIDEzLjYwIDExOC4zOSAxNC4xMlExMTkuNDYgMTQuNjMgMTIwLjA1IDE1LjU4UTEyMC42NCAxNi41MyAxMjAuNjQgMTcuODBMMTIwLjY0IDE3LjgwUTEyMC42NCAxOS4wNyAxMjAuMDUgMjAuMDJRMTE5LjQ2IDIwLjk3IDExOC4zOSAyMS40OFExMTcuMzMgMjIgMTE1Ljk0IDIyTDExNS45NCAyMlpNMTE0LjM1IDE1LjUwTDExNC4zNSAyMC4xMEwxMTUuODUgMjAuMTBRMTE2LjkzIDIwLjEwIDExNy41OCAxOS40OVExMTguMjMgMTguODggMTE4LjIzIDE3LjgwTDExOC4yMyAxNy44MFExMTguMjMgMTYuNzIgMTE3LjU4IDE2LjExUTExNi45MyAxNS41MCAxMTUuODUgMTUuNTBMMTE1Ljg1IDE1LjUwTDExNC4zNSAxNS41MFoiIGZpbGw9IiNGRkZGRkYiIHg9IjY3LjUzOTk5OTk5OTk5OTk5Ii8+PC9zdmc+)](https://forthebadge.com)
[![forthebadge](data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNjYuMDE5OTk5OTk5OTk5OTgiIGhlaWdodD0iMzUiIHZpZXdCb3g9IjAgMCAxNjYuMDE5OTk5OTk5OTk5OTggMzUiPjxyZWN0IGNsYXNzPSJzdmdfX3JlY3QiIHg9IjAiIHk9IjAiIHdpZHRoPSI1NS41MTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzUiIGZpbGw9IiMzQUMxRDAiLz48cmVjdCBjbGFzcz0ic3ZnX19yZWN0IiB4PSI1My41MTk5OTk5OTk5OTk5OTYiIHk9IjAiIHdpZHRoPSIxMTIuNDk5OTk5OTk5OTk5OTkiIGhlaWdodD0iMzUiIGZpbGw9IiM1NTkzQzciLz48cGF0aCBjbGFzcz0ic3ZnX190ZXh0IiBkPSJNMTMuNzggMTkuNDJMMTMuNzggMTkuNDJMMTUuMjcgMTkuNDJRMTUuMjcgMjAuMTUgMTUuNzUgMjAuNTVRMTYuMjMgMjAuOTUgMTcuMTIgMjAuOTVMMTcuMTIgMjAuOTVRMTcuOTAgMjAuOTUgMTguMjkgMjAuNjNRMTguNjggMjAuMzIgMTguNjggMTkuODBMMTguNjggMTkuODBRMTguNjggMTkuMjQgMTguMjggMTguOTRRMTcuODkgMTguNjMgMTYuODUgMTguMzJRMTUuODIgMTguMDEgMTUuMjEgMTcuNjNMMTUuMjEgMTcuNjNRMTQuMDUgMTYuOTAgMTQuMDUgMTUuNzJMMTQuMDUgMTUuNzJRMTQuMDUgMTQuNjkgMTQuODkgMTQuMDJRMTUuNzMgMTMuMzUgMTcuMDcgMTMuMzVMMTcuMDcgMTMuMzVRMTcuOTYgMTMuMzUgMTguNjYgMTMuNjhRMTkuMzYgMTQuMDEgMTkuNzUgMTQuNjFRMjAuMTUgMTUuMjIgMjAuMTUgMTUuOTZMMjAuMTUgMTUuOTZMMTguNjggMTUuOTZRMTguNjggMTUuMjkgMTguMjYgMTQuOTFRMTcuODQgMTQuNTQgMTcuMDYgMTQuNTRMMTcuMDYgMTQuNTRRMTYuMzMgMTQuNTQgMTUuOTMgMTQuODVRMTUuNTMgMTUuMTYgMTUuNTMgMTUuNzFMMTUuNTMgMTUuNzFRMTUuNTMgMTYuMTggMTUuOTYgMTYuNTBRMTYuNDAgMTYuODEgMTcuMzkgMTcuMTBRMTguMzkgMTcuNDAgMTguOTkgMTcuNzhRMTkuNjAgMTguMTYgMTkuODggMTguNjVRMjAuMTYgMTkuMTMgMjAuMTYgMTkuNzlMMjAuMTYgMTkuNzlRMjAuMTYgMjAuODYgMTkuMzQgMjEuNDlRMTguNTIgMjIuMTIgMTcuMTIgMjIuMTJMMTcuMTIgMjIuMTJRMTYuMjAgMjIuMTIgMTUuNDIgMjEuNzdRMTQuNjQgMjEuNDMgMTQuMjEgMjAuODNRMTMuNzggMjAuMjIgMTMuNzggMTkuNDJaTTI1LjkzIDIyTDI0LjQ1IDIyTDI0LjQ1IDEzLjQ3TDI3LjQ1IDEzLjQ3UTI4LjkyIDEzLjQ3IDI5LjczIDE0LjEzUTMwLjUzIDE0Ljc5IDMwLjUzIDE2LjA1TDMwLjUzIDE2LjA1UTMwLjUzIDE2LjkwIDMwLjEyIDE3LjQ4UTI5LjcwIDE4LjA2IDI4Ljk3IDE4LjM3TDI4Ljk3IDE4LjM3TDMwLjg4IDIxLjkyTDMwLjg4IDIyTDI5LjI5IDIyTDI3LjU4IDE4LjcxTDI1LjkzIDE4LjcxTDI1LjkzIDIyWk0yNS45MyAxNC42NkwyNS45MyAxNy41MkwyNy40NSAxNy41MlEyOC4yMCAxNy41MiAyOC42MyAxNy4xNVEyOS4wNSAxNi43NyAyOS4wNSAxNi4xMUwyOS4wNSAxNi4xMVEyOS4wNSAxNS40MyAyOC42NiAxNS4wNVEyOC4yNyAxNC42OCAyNy40OSAxNC42NkwyNy40OSAxNC42NkwyNS45MyAxNC42NlpNMzYuNDEgMjJMMzQuOTIgMjJMMzQuOTIgMTMuNDdMMzguMTkgMTMuNDdRMzkuNjIgMTMuNDcgNDAuNDYgMTQuMjFRNDEuMzAgMTQuOTYgNDEuMzAgMTYuMThMNDEuMzAgMTYuMThRNDEuMzAgMTcuNDQgNDAuNDggMTguMTNRMzkuNjUgMTguODMgMzguMTcgMTguODNMMzguMTcgMTguODNMMzYuNDEgMTguODNMMzYuNDEgMjJaTTM2LjQxIDE0LjY2TDM2LjQxIDE3LjY0TDM4LjE5IDE3LjY0UTM4Ljk4IDE3LjY0IDM5LjM5IDE3LjI3UTM5LjgxIDE2LjkwIDM5LjgxIDE2LjE5TDM5LjgxIDE2LjE5UTM5LjgxIDE1LjUwIDM5LjM5IDE1LjA5UTM4Ljk3IDE0LjY4IDM4LjIzIDE0LjY2TDM4LjIzIDE0LjY2TDM2LjQxIDE0LjY2WiIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGNsYXNzPSJzdmdfX3RleHQiIGQ9Ik02OS41MCAxNS40OEw2Ni45MiAxNS40OEw2Ni45MiAxMy42MEw3NC40NCAxMy42MEw3NC40NCAxNS40OEw3MS44NyAxNS40OEw3MS44NyAyMkw2OS41MCAyMkw2OS41MCAxNS40OFpNODEuMTkgMjJMNzguODEgMjJMNzguODEgMTMuNjBMODIuNjYgMTMuNjBRODMuODAgMTMuNjAgODQuNjQgMTMuOThRODUuNDcgMTQuMzUgODUuOTMgMTUuMDZRODYuMzkgMTUuNzYgODYuMzkgMTYuNzFMODYuMzkgMTYuNzFRODYuMzkgMTcuNjIgODUuOTYgMTguMzBRODUuNTMgMTguOTggODQuNzQgMTkuMzZMODQuNzQgMTkuMzZMODYuNTUgMjJMODQuMDEgMjJMODIuNDkgMTkuNzdMODEuMTkgMTkuNzdMODEuMTkgMjJaTTgxLjE5IDE1LjQ3TDgxLjE5IDE3LjkzTDgyLjUxIDE3LjkzUTgzLjI0IDE3LjkzIDgzLjYxIDE3LjYxUTgzLjk5IDE3LjI5IDgzLjk5IDE2LjcxTDgzLjk5IDE2LjcxUTgzLjk5IDE2LjEyIDgzLjYxIDE1Ljc5UTgzLjI0IDE1LjQ3IDgyLjUxIDE1LjQ3TDgyLjUxIDE1LjQ3TDgxLjE5IDE1LjQ3Wk05Mi41OSAyMkw5MC4xNyAyMkw5My44OCAxMy42MEw5Ni4yMiAxMy42MEw5OS45MyAyMkw5Ny40NyAyMkw5Ni44MSAyMC4zN0w5My4yNSAyMC4zN0w5Mi41OSAyMlpNOTUuMDMgMTUuOTNMOTMuOTUgMTguNjFMOTYuMTEgMTguNjFMOTUuMDMgMTUuOTNaTTEwNi40NyAyMkwxMDQuMDkgMjJMMTA0LjA5IDEzLjYwTDEwNi40NyAxMy42MEwxMDYuNDcgMjJaTTExMy45NyAyMkwxMTEuNjQgMjJMMTExLjY0IDEzLjYwTDExMy42MCAxMy42MEwxMTcuMzEgMTguMDdMMTE3LjMxIDEzLjYwTDExOS42MyAxMy42MEwxMTkuNjMgMjJMMTE3LjY4IDIyTDExMy45NyAxNy41MkwxMTMuOTcgMjJaTTEyNy4xNyAyMkwxMjQuODAgMjJMMTI0LjgwIDEzLjYwTDEyNy4xNyAxMy42MEwxMjcuMTcgMjJaTTEzNC42OCAyMkwxMzIuMzUgMjJMMTMyLjM1IDEzLjYwTDEzNC4zMSAxMy42MEwxMzguMDEgMTguMDdMMTM4LjAxIDEzLjYwTDE0MC4zNCAxMy42MEwxNDAuMzQgMjJMMTM4LjM5IDIyTDEzNC42OCAxNy41MkwxMzQuNjggMjJaTTE0NS4wOCAxNy44MEwxNDUuMDggMTcuODBRMTQ1LjA4IDE2LjU0IDE0NS42NyAxNS41NFExNDYuMjcgMTQuNTUgMTQ3LjM0IDEzLjk5UTE0OC40MSAxMy40MyAxNDkuNzUgMTMuNDNMMTQ5Ljc1IDEzLjQzUTE1MC45MyAxMy40MyAxNTEuODcgMTMuODNRMTUyLjgwIDE0LjIyIDE1My40MiAxNC45N0wxNTMuNDIgMTQuOTdMMTUxLjkxIDE2LjMzUTE1MS4wNyAxNS40MCAxNDkuODkgMTUuNDBMMTQ5Ljg5IDE1LjQwUTE0OS44OCAxNS40MCAxNDkuODcgMTUuNDBMMTQ5Ljg3IDE1LjQwUTE0OC44MCAxNS40MCAxNDguMTMgMTYuMDZRMTQ3LjQ3IDE2LjcxIDE0Ny40NyAxNy44MEwxNDcuNDcgMTcuODBRMTQ3LjQ3IDE4LjUwIDE0Ny43NyAxOS4wNFExNDguMDggMTkuNTkgMTQ4LjYxIDE5Ljg5UTE0OS4xNSAyMC4yMCAxNDkuODUgMjAuMjBMMTQ5Ljg1IDIwLjIwUTE1MC41NCAyMC4yMCAxNTEuMTMgMTkuOTNMMTUxLjEzIDE5LjkzTDE1MS4xMyAxNy42MkwxNTMuMjMgMTcuNjJMMTUzLjIzIDIxLjEwUTE1Mi41MSAyMS42MSAxNTEuNTggMjEuODlRMTUwLjY0IDIyLjE3IDE0OS43MCAyMi4xN0wxNDkuNzAgMjIuMTdRMTQ4LjM5IDIyLjE3IDE0Ny4zMyAyMS42MVExNDYuMjcgMjEuMDUgMTQ1LjY3IDIwLjA1UTE0NS4wOCAxOS4wNiAxNDUuMDggMTcuODBaIiBmaWxsPSIjRkZGRkZGIiB4PSI2Ni41MiIvPjwvc3ZnPg==)](https://forthebadge.com)

[![forthebadge](https://forthebadge.com/images/badges/powered-by-electricity.svg)](https://forthebadge.com)

# SRP (single responsability principle)

## Une classe, une responsabilité un rôle.

### 1- Organistaion

### 2- Testabilité (test unitaires)

### 3- Flexibilité

### 4- Evolutivité






